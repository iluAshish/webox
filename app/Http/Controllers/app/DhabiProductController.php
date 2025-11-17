<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DhabiProduct;
use App\Models\ProductGallery;
use App\Models\ProductSpecificationHead;
use App\Models\ProductSpecification;
use App\Http\Helpers\Helper;
use App\Models\ServiceFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DhabiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function containers()
    {
        $productList = DhabiProduct::latest()->get();
        $categories = Category::active()->whereNull('parent_id')->get();
        //        var_dump($productList);
        $title = "Containers List";
        $type = 'products';
        return view('app.product.list', compact('productList', 'title', 'type', 'categories'));
    }


    public function product_create()
    {
        $key = "Create";
        $title = "Create Container";
        $products = DhabiProduct::latest()->get();
        $categories = Category::active()->whereNull('parent_id')->get();
        return view('app.product.form', compact('key', 'title', 'products', 'categories'));
    }

    public function product_store(Request $request)
    {
        DB::beginTransaction();
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:255',
            'category' => 'required',
            'thumbnail_image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);
        $product = new DhabiProduct();
        if ($request->hasFile('thumbnail_image')) {
            $product->thumbnail_image_webp = Helper::uploadWebpImage($request->thumbnail_image, 'uploads/product/image/webp/', $request->short_url);
            $product->thumbnail_image = Helper::uploadFile($request->thumbnail_image, 'uploads/product/image/', $request->short_url);
        }



        if ($request->hasFile('featured_image')) {
            $product->featured_image = Helper::uploadWebpImage($request->featured_image, 'uploads/product/featured_image/webp/', $request->short_url);
            $product->featured_image_webp = Helper::uploadFile($request->featured_image, 'uploads/product/featured_image/', $request->short_url);
        }




        $product->title = ucfirst($validatedData['title']);
        $product->short_url = $request->short_url;
        $product->category_id = $request->category ??  '';



        $product->short_description = $request->description ?? '';
        $product->description = $request->alternate_description ?? '';

        $product->thumbnail_image_attribute = $request->thumbnail_image_attribute ?? '';
        $product->featured_image_attribute = $request->featured_image_attribute ?? '';



        $meta_title = $request->meta_title ?? '';
        $meta_description = $request->meta_description ?? '';
        $meta_keyword = $request->meta_keyword ?? '';
        $other_meta_tag = $request->other_meta_tag ?? '';

        if ($meta_title == '') {
            $product->meta_title = strtoupper($validatedData['title']);
        } else {
            $product->meta_title = $request->meta_title ?? '';
        }
        if ($meta_description == '') {
            $product->meta_description = strtoupper($validatedData['title']);
        } else {
            $product->meta_description = $request->meta_description ?? '';
        }
        if ($meta_keyword == '') {
            $product->meta_keyword = strtoupper($validatedData['title']);
        } else {
            $product->meta_keyword = $request->meta_keyword ?? '';
        }
        if ($other_meta_tag == '') {
            $product->other_meta_tag = '';
        } else {
            $product->other_meta_tag = $request->other_meta_tag ?? '';
        }

        $sort_order = DhabiProduct::orderBy('sort_order', 'DESC')->first();

        if ($sort_order) {
            $sort_number = ($sort_order->sort_order + 1);
        } else {
            $sort_number = 1;
        }

        $product->sort_order = $sort_number;



        if ($product->save()) {
            session()->flash('success', "Container '" . $product->title . "' has been added successfully");
            DB::commit();
            return redirect(Helper::sitePrefix() . 'containers');
        } else {
            DB::rollBack();
            return back()->withInput($request->input())->withErrors("Error while updating the product");
        }
    }
    //
    public function product_edit(Request $request, $id)
    {
        $key = "Update";
        $title = "Update Container";
        $product = DhabiProduct::find($id);
        if ($product) {

            $categories = Category::active()->whereNull('parent_id')->get();
            $products = DhabiProduct::active()->get();
            return view('app.product.form', compact('key', 'title', 'categories', 'products', 'product'));
        } else {
            return view('app.error.404');
        }
    }

    public function product_update(Request $request, $id)
    {
        DB::beginTransaction();

        $product = DhabiProduct::find($id);
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:255',
            'category' => 'required',
            'thumbnail_image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);
        if ($request->hasFile('thumbnail_image')) {
            if (File::exists(public_path($product->thumbnail_image))) {
                File::delete(public_path($product->thumbnail_image));
            }
            if (File::exists(public_path($product->thumbnail_image_webp))) {
                File::delete(public_path($product->thumbnail_image_webp));
            }
            $product->thumbnail_image_webp = Helper::uploadWebpImage($request->thumbnail_image, 'uploads/product/image/webp/', $request->short_url);
            $product->thumbnail_image = Helper::uploadFile($request->thumbnail_image, 'uploads/product/image/', $request->short_url);
        }

        if ($request->hasFile('featured_image')) {
            if (File::exists(public_path($product->featured_image))) {
                File::delete(public_path($product->featured_image));
            }
            if (File::exists(public_path($product->featured_image_webp))) {
                File::delete(public_path($product->featured_image_webp));
            }
            $product->featured_image = Helper::uploadWebpImage($request->featured_image, 'uploads/product/featured_image/webp/', $request->short_url);
            $product->featured_image_webp = Helper::uploadFile($request->featured_image, 'uploads/product/featured_image/', $request->short_url);
        }

        $product->title = ucfirst($validatedData['title']);
        $product->category_id = $request->short_url ?? '';
        $product->category_id = $request->category ?? '';

        $product->featured_image_attribute = $request->featured_image_attribute ?? '';

        $product->short_description = $request->description ?? '';
        $product->description = $request->alternate_description ?? '';

        //    $product->description = $validatedData['description'];
        $product->thumbnail_image_attribute = $request->thumbnail_image_attribute ?? '';

        $meta_title = $request->meta_title ?? '';
        $meta_description = $request->meta_description ?? '';
        $meta_keyword = $request->meta_keyword ?? '';
        $other_meta_tag = $request->other_meta_tag ?? '';

        if ($meta_title == '') {
            $product->meta_title = strtoupper($validatedData['title']);
        } else {
            $product->meta_title = $request->meta_title ?? '';
        }
        if ($meta_description == '') {
            $product->meta_description = strtoupper($validatedData['title']);
        } else {
            $product->meta_description = $request->meta_description ?? '';
        }
        if ($meta_keyword == '') {
            $product->meta_keyword = strtoupper($validatedData['title']);
        } else {
            $product->meta_keyword = $request->meta_keyword ?? '';
        }
        if ($other_meta_tag == '') {
            $product->other_meta_tag = '';
        } else {
            $product->other_meta_tag = $request->other_meta_tag ?? '';
        }
        $product->updated_at = now();
        if ($product->save()) {
            session()->flash('success', "Container '" . $product->title . "' has been updated successfully");
            DB::commit();
            return redirect(Helper::sitePrefix() . 'containers/');
        } else {
            DB::rollBack();
            return back()->withInput($request->input())->withErrors("Error while updating the product");
        }
    }
    //
    public function delete_product(Request $request)
    {
        if (isset($request->id) && $request->id != null) {
            $product = DhabiProduct::find($request->id);
            if ($product) {
                if (File::exists(public_path($product->thumbnail_image))) {
                    File::delete(public_path($product->thumbnail_image));
                }
                if (File::exists(public_path($product->thumbnail_image_webp))) {
                    File::delete(public_path($product->thumbnail_image_webp));
                }
                if ($product->delete()) {
                    return response()->json(['status' => true]);
                } else {
                    return response()->json(['status' => false, 'message' => 'Some error occurred,please try after sometime']);
                }
            } else {
                return response()->json(['status' => false, 'message' => 'Model class not found']);
            }
        } else {
            return response()->json(['status' => false, 'message' => 'Empty value submitted']);
        }
    }

    public function gallery($product_id)
    {
        $product = DhabiProduct::find($product_id);
        $title = " Gallery List - " . $product->title;
        $productGalleryList = ProductGallery::where('product_id', '=', $product_id)->get();
        return view('app.product.gallery.list', compact('productGalleryList', 'title', 'product_id'));
    }

    public function gallery_create($product_id)
    {
        $product = DhabiProduct::find($product_id);
        $key = "Create";
        $title = "Create Product Gallery  - " . $product->title;
        return view('app.product.gallery.form', compact('key', 'title', 'product_id'));
    }

    public function gallery_store(Request $request)
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'image_attribute' => 'required',
        ]);

        $product = DhabiProduct::find($request->product_id);
        $sort_order = $product->activeGalleries;
        if ($sort_order) {
            $sort_number = ($sort_order->sort_order + 1);
        } else {
            $sort_number = 1;
        }

        $added_images = $not_added_images = 0;
        if ($request->media_type == "Image") {
            foreach ($request->image as $gallery_image) {
                $product_gallery = new ProductGallery;
                $product_gallery = $this->gallery_store_items($request, $gallery_image, $product_gallery, $product, $sort_number);
                $product_gallery->sort_order = $sort_number;
                if ($product_gallery->save()) {
                    $added_images++;
                } else {
                    $not_added_images++;
                }
                $sort_number++;
            }
        } else {
            $product_gallery = new ProductGallery;
            $gallery_image = $request->image;
            $product_gallery = $this->gallery_store_items($request, $gallery_image, $product_gallery, $product, $sort_number);
            $product_gallery->sort_order = $sort_number;
            if ($product_gallery->save()) {
                $added_images++;
            } else {
                $not_added_images++;
            }
        }

        if ($not_added_images == 0) {
            session()->flash('message', $added_images . " gallery images of Product '" . $product->title . "' has been added successfully");
            return redirect(Helper::sitePrefix() . 'containers/gallery/' . $request->product_id);
        } else {
            return back()->with('message', 'Error while creating the product gallery');
        }
    }

    public function gallery_store_items(Request $request, $gallery_image, $product_gallery, $product, $sort_number)
    {
        $product_gallery->image_webp = Helper::uploadWebpImage($gallery_image, 'uploads/containers/gallery/image/webp/', $product->short_url);
        $product_gallery->image = Helper::uploadFile($gallery_image, 'uploads/containers/gallery/image/', $product->short_url);
        $product_gallery->media_type = $request->media_type;
        if ($request->media_type == "Video") {
            $product_gallery->video_url = $request->video_url;
        }
        $product_gallery->product_id = $product->id;
        $product_gallery->image_attribute = $request->image_attribute;

        return $product_gallery;
    }

    public function gallery_edit($id)
    {
        $key = "Update";
        $product_gallery = ProductGallery::find($id);
        $title = "Update Container Gallery";
        if ($product_gallery) {
            $product_id = $product_gallery->product_id;
            return view('app.product.gallery.form', compact('key', 'product_gallery', 'title', 'product_id'));
        } else {
            return view('app.error.404');
        }
    }

    public function gallery_update(Request $request, $id)
    {
        $product_gallery = ProductGallery::find($id);
        $product = DhabiProduct::find($request->product_id);
        if ($request->hasFile('image')) {
            if (File::exists(public_path($product_gallery->image))) {
                File::delete(public_path($product_gallery->image));
            }
            if (File::exists(public_path($product_gallery->image_webp))) {
                File::delete(public_path($product_gallery->image_webp));
            }
            $product_gallery->image_webp = Helper::uploadWebpImage($request->image, 'uploads/containers/gallery/image/webp/', $product->short_url);
            $product_gallery->image = Helper::uploadFile($request->image, 'uploads/containers/gallery/image/', $product->short_url);
        }
        $product_gallery->media_type = $request->media_type;
        if ($request->media_type == "Video") {
            $product_gallery->video_url = $request->video_url;
        }
        $product_gallery->product_id = $request->product_id;
        $product_gallery->image_attribute = $request->image_attribute;
        $product_gallery->updated_at = now();
        if ($product_gallery->save()) {
            session()->flash('message', "Product gallery has been updated successfully");
            return redirect(Helper::sitePrefix() . 'containers/gallery/' . $product->id);
        } else {
            return back()->with('message', 'Error while updating the gallery');
        }
    }

    public function delete_gallery(Request $request)
    {
        if (isset($request->id) && $request->id != null) {
            $product_gallery = ProductGallery::find($request->id);
            if ($product_gallery) {
                if (File::exists(public_path($product_gallery->image))) {
                    File::delete(public_path($product_gallery->image));
                }
                if (File::exists(public_path($product_gallery->image_webp))) {
                    File::delete(public_path($product_gallery->image_webp));
                }
                if ($product_gallery->delete()) {
                    return response()->json(['status' => true]);
                } else {
                    return response()->json(['status' => false, 'message' => 'Some error occurred,please try after sometime']);
                }
            } else {
                return response()->json(['status' => false, 'message' => 'Model class not found']);
            }
        } else {
            return response()->json(['status' => false, 'message' => 'Empty value submitted']);
        }
    }

    public function specification($product_id)
    {
        $key = "Create";
        $title = "Create Container Specification";
        $product = DhabiProduct::find($product_id);
        $ProductSpecification = ProductSpecification::where('product_id', $product_id)->get();
        return view('app.product.specification.list', compact('key', 'title', 'product_id', 'ProductSpecification', 'product'));
    }

    public function specification_create($product_id)
    {
        $title = "Product Add Specification";
        $type = "create";
        return view('app.product.specification.product_specification', compact('title', 'product_id', 'type'));
    }

    public function specification_store(Request $request)
    {
        if (isset($request->title) && $request->value != NULL) {
            $specification = new ProductSpecification;

            $specification->product_id = $request->product_id;
            $specification->title = $request->title;
            $specification->description = $request->value;
            $sort_order = ProductSpecification::where('product_id', $request->product_id)->latest('sort_order')->first();
            if ($sort_order) {
                $sort_number = ($sort_order->sort_order + 1);
            } else {
                $sort_number = 1;
            }
            $specification->sort_order = $sort_number;
            if ($specification->save()) {

                //$saved = $this->store_specifications($request, $specification);
                if ($specification->save()) {
                    session()->flash('success', "Specification has been updated successfully");
                } else {
                    session()->flash('error', "Error while updating the specification");
                }
            }
            return redirect(Helper::sitePrefix() . 'containers/specification/' . $request->product_id);
        }
    }


    //    public function specification_row(Request $request)
    //    {
    //        $primary_key = $request->unique_id + 1;
    //        return view('app.product.specification.product_extra_content', compact('primary_key'));
    //    }


    //    public function remove_specification_row(Request $request)
    //    {
    //        $productExtra = ProductSpecification::find($request->id);
    //        if ($productExtra) {
    //            $deleted = $productExtra->delete();
    //            if ($deleted == true) {
    //                echo(json_encode(array('status' => true)));
    //            } else {
    //                echo(json_encode(array('status' => false, 'message' => 'Some error occurred,please try after sometime')));
    //            }
    //        } else {
    //            echo(json_encode(array('status' => false, 'message' => 'Not found')));
    //        }
    //    }


    public function specification_edit($id)
    {
        $title = "Product Edit Specification";
        $ProductSpecification = ProductSpecification::where([['status', 'Active'], ['id', $id], ['deleted_at', Null]])->get()->first();
        $product_id = $ProductSpecification->product_id;
        $type = 'edit';
        // dd($productSpecification);
        return view('app.product.specification.product_specification', compact('title', 'product_id', 'ProductSpecification', 'type'));
    }

    public function specification_update(Request $request, $id)
    {
        if (isset($request->title) && $request->value != NULL) {
            $head = new ProductSpecification;
            if ($id == 0) {
                $head = new ProductSpecification;
            } else {
                $head = ProductSpecification::find($id);
                $head->updated_at = now();
            }

            $head->product_id = $request->product_id;
            $head->title = $request->title;
            $head->description = $request->value;


            if ($head->save()) {
                //    $saved = $this->store_specifications($request, $head);
                if ($head->save()) {
                    session()->flash('success', "Specification has been updated successfully");
                } else {
                    session()->flash('error', "Error while updating the specification");
                }
            }
            return redirect(Helper::sitePrefix() . 'containers/specification/' . $request->product_id);
        }
    }


    public function delete_specification(Request $request)
    {

        if (isset($request->id) && $request->id != null) {
            $speciicationhead = ProductSpecification::find($request->id);
            if ($speciicationhead) {
                $speciications = ProductSpecification::where('product_id', $request->id)->count();
                if ($speciications > 0) {
                    $speciications = ProductSpecification::where('product_id', $request->id)->delete();
                }
                $deleted = $speciicationhead->delete();
                if ($deleted == true) {
                    echo (json_encode(array('status' => true)));
                } else {
                    echo (json_encode(array('status' => false, 'message' => 'Some error occurred,please try after sometime')));
                }
            } else {
                echo (json_encode(array('status' => false, 'message' => 'Model class not found')));
            }
        } else {
            echo (json_encode(array('status' => false, 'message' => 'Empty value submitted')));
        }
    }


    public function category_list()
    {
        $title = "Category List";
        $categoryList = Category::whereNull('parent_id')->get();
        $type = 'Category';
        $urlType = 'category';
        return view('app.product.category.list', compact('categoryList', 'title', 'type', 'urlType'));
    }
    public function category_create()
    {
        $key = "Create";
        $title = "Create Category";
        $type = 'Category';
        $urlType = 'category';
        $typeFlag = 'category';
        return view('app.product.category.form', compact('key', 'title', 'type', 'urlType', 'typeFlag'));
    }

    public function category_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:255',
            'short_description' => 'required|min:2'
        ]);
        $category = new Category;

        // if ($request->hasFile('featured_image')) {
        //     $category->featured_image_webp = Helper::uploadWebpImage($request->featured_image, 'uploads/category/featured_image/webp/', $request->short_url);
        //     $category->featured_image = Helper::uploadFile($request->featured_image, 'uploads/category/featured_image/', $request->short_url);
        // }
        // if ($request->hasFile('thumbnail_image')) {
        //     $category->thumbnail_image_webp = Helper::uploadWebpImage($request->thumbnail_image, 'uploads/category/thumbnail_image/webp/', $request->short_url);
        //     $category->thumbnail_image = Helper::uploadFile($request->thumbnail_image, 'uploads/category/thumbnail_image/', $request->short_url);
        // }
        // if ($request->hasFile('banner_image')) {
        //     $category->banner_image_webp = Helper::uploadWebpImage($request->banner_image, 'category/product/banner/webp/', $request->short_url);
        //     $category->banner_image = Helper::uploadFile($request->banner_image, 'uploads/category/banner/', $request->short_url);
        // }

        $category->title = ucfirst($validatedData['title']);
        $category->short_url = $validatedData['short_url'] ?? '';
        $category->parent_id = null;

        $category->thumbnail_image_attribute = $request->thumbnail_image_attribute ?? '';
        $category->featured_image_attribute = $request->featured_image_attribute ?? '';
        $category->banner_image_attribute = $request->banner_image_attribute ?? '';


        $meta_title = $request->meta_title ?? '';
        $meta_description = $request->meta_description ?? '';
        $meta_keyword = $request->meta_keyword ?? '';
        $other_meta_tag = $request->other_meta_tag ?? '';

        if ($meta_title == '') {
            $category->meta_title = strtoupper($validatedData['title']);
        } else {
            $category->meta_title = $request->meta_title ?? '';
        }
        if ($meta_description == '') {
            $category->meta_description = strtoupper($validatedData['title']);
        } else {
            $category->meta_description = $request->meta_description ?? '';
        }
        if ($meta_keyword == '') {
            $category->meta_keyword = strtoupper($validatedData['title']);
        } else {
            $category->meta_keyword = $request->meta_keyword ?? '';
        }
        if ($other_meta_tag == '') {
            $category->other_meta_tag = '';
        } else {
            $category->other_meta_tag = $request->other_meta_tag ?? '';
        }

        $sort_order = Category::orderBy('sort_order', 'DESC')->first();

        if ($sort_order) {
            $sort_number = ($sort_order->sort_order + 1);
        } else {
            $sort_number = 1;
        }

        $category->sort_order = $sort_number;


        $category->short_description = $request->short_description ?? '';
        $category->description = $request->description ?? '';
        if ($category->save()) {
            session()->flash('message', "Category '" . $category->title . "' has been added successfully");
            return redirect(Helper::sitePrefix() . 'containers/category');
        } else {
            return back()->withInput($request->input())->withErrors("Error while updating the content");
        }
    }

    public function category_edit(Request $request, $id)
    {
        $key = "Update";
        $title = "Update category";
        $category = Category::find($id);
        $type = 'Category';
        $urlType = 'category';
        $typeFlag = 'category';
        if ($category) {
            return view('app.product.category.form', compact('key', 'category', 'title', 'type', 'urlType', 'typeFlag'));
        } else {
            return view('backend.error.404');
        }
    }

    public function category_update(Request $request, $id)
    {
        $category = Category::find($id);
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:255',
            'short_description' => 'required|min:2',
        ]);

        // if ($request->hasFile('featured_image')) {
        //     if (File::exists(public_path($category->featured_image))) {
        //         File::delete(public_path($category->featured_image));
        //     }
        //     if (File::exists(public_path($category->featured_image_webp))) {
        //         File::delete(public_path($category->featured_image_webp));
        //     }
        //     $category->featured_image_webp = Helper::uploadWebpImage($request->featured_image, 'uploads/category/featured_image/webp/', $request->short_url);
        //     $category->featured_image = Helper::uploadFile($request->featured_image, 'uploads/category/featured_image/', $request->short_url);
        // }

        // if ($request->hasFile('banner_image')) {
        //     if (File::exists(public_path($category->banner_image))) {
        //         File::delete(public_path($category->banner_image));
        //     }
        //     if (File::exists(public_path($category->banner_image_webp))) {
        //         File::delete(public_path($category->banner_image_webp));
        //     }
        //     $category->banner_image_webp = Helper::uploadWebpImage($request->banner_image, 'category/product/banner/webp/', $request->short_url);
        //     $category->banner_image = Helper::uploadFile($request->banner_image, 'uploads/category/banner/', $request->short_url);
        // }

        // if ($request->hasFile('thumbnail_image')) {
        //     if (File::exists(public_path($category->thumbnail_image))) {
        //         File::delete(public_path($category->thumbnail_image));
        //     }
        //     if (File::exists(public_path($category->thumbnail_image_webp))) {
        //         File::delete(public_path($category->thumbnail_image_webp));
        //     }
        //     $category->thumbnail_image_webp = Helper::uploadWebpImage($request->thumbnail_image, 'uploads/category/thumbnail_image/webp/', $request->short_url);
        //     $category->thumbnail_image = Helper::uploadFile($request->thumbnail_image, 'uploads/category/thumbnail_image/', $request->short_url);
        // }

        $category->title = ucfirst($validatedData['title']);
        $category->short_url = $validatedData['short_url'] ?? '';
        $category->parent_id = null;

        $category->thumbnail_image_attribute = $request->thumbnail_image_attribute ?? '';
        $category->featured_image_attribute = $request->featured_image_attribute ?? '';


        $meta_title = $request->meta_title ?? '';
        $meta_description = $request->meta_description ?? '';
        $meta_keyword = $request->meta_keyword ?? '';
        $other_meta_tag = $request->other_meta_tag ?? '';

        if ($meta_title == '') {
            $category->meta_title = strtoupper($validatedData['title']);
        } else {
            $category->meta_title = $request->meta_title ?? '';
        }
        if ($meta_description == '') {
            $category->meta_description = strtoupper($validatedData['title']);
        } else {
            $category->meta_description = $request->meta_description ?? '';
        }
        if ($meta_keyword == '') {
            $category->meta_keyword = strtoupper($validatedData['title']);
        } else {
            $category->meta_keyword = $request->meta_keyword ?? '';
        }
        if ($other_meta_tag == '') {
            $category->other_meta_tag = '';
        } else {
            $category->other_meta_tag = $request->other_meta_tag ?? '';
        }



        $category->short_description = $request->short_description ?? '';
        $category->description = $request->description ?? '';


        $category->updated_at = now();
        if ($category->save()) {
            session()->flash('message', "Category '" . $category->title . "' has been updated successfully");
            return redirect(Helper::sitePrefix() . 'containers/category');
        } else {
            return back()->withInput($request->input())->withErrors("Error while updating the content");
        }
    }

    public function delete_category(Request $request)
    {
        if (isset($request->id) && $request->id != NULL) {
            $category = Category::find($request->id);
            if ($category) {
                $childCategory = Category::where('parent_id', $request->id)->count();
                if ($childCategory > 0) {
                    return response()->json(['status' => false, 'message' => 'Error : Category "' . $category->title . '" has child entries']);
                } else {


                    if (File::exists(public_path($category->featured_image))) {
                        File::delete(public_path($category->featured_image));
                    }
                    if (File::exists(public_path($category->featured_image_webp))) {
                        File::delete(public_path($category->featured_image_webp));
                    }

                    if (File::exists(public_path($category->banner_image))) {
                        File::delete(public_path($category->banner_image));
                    }
                    if (File::exists(public_path($category->banner_image_webp))) {
                        File::delete(public_path($category->banner_image_webp));
                    }

                    if (File::exists(public_path($category->thumbnail_image))) {
                        File::delete(public_path($category->thumbnail_image));
                    }
                    if (File::exists(public_path($category->thumbnail_image_webp))) {
                        File::delete(public_path($category->thumbnail_image_webp));
                    }
                    if ($category->delete()) {
                        return response()->json(['status' => true]);
                    } else {
                        return response()->json(['status' => false, 'message' => 'Some error occurred,please try after sometime']);
                    }
                }
            } else {
                return response()->json(['status' => false, 'message' => 'Model class not found']);
            }
        } else {
            return response()->json(['status' => false, 'message' => 'Empty value submitted']);
        }
    }
}
