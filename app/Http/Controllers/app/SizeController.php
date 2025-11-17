<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Models\SectionHeading;

use App\Models\Size;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SizeController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_verify_email');
    }

    public function size()
    {
        $title = "Size List";
        $type = "size";
        $sizeList = Size::whereNull('parent_id')->latest()->get();
        
        $home_heading = SectionHeading::where('type', 'home_size')->first();
        $size_heading = SectionHeading::where('type', 'size_page')->first();

        return view('app.size.list', compact('sizeList', 'title', 'type', 'home_heading', 'size_heading'));
    }

    public function size_create()
    {
        $key = "Create";
        $type = "size";
        $title = "Create Size";
        return view('app.size.form', compact('key', 'title', 'type'));
    }

    public function size_store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:255',
            'category' => 'nullable|min:2|max:255',
            'short_description' => 'required|string|min:2',
            'description' => 'required|min:2',
            'alternate_description' => 'nullable|min:2',
            'image' => 'required',
        ]);
        

        $size = new size;
        if ($request->hasFile('banner_image')) {
            $size->banner_image_webp = Helper::uploadWebpImage($request->banner_image, 'uploads/size/banner/', 'size');
            $size->banner_image = Helper::uploadFile($request->banner_image, 'uploads/size/banner/', 'size');
        }
        // size image
        if ($request->hasFile('image')) {
            $size->image_webp = Helper::uploadWebpImage($request->image, 'uploads/size/webp_image/', 'size');
            $size->image = Helper::uploadFile($request->image, 'uploads/size/image/', 'size');
        }
//        // alternate size image
       if ($request->hasFile('alternate_image')) {
           $size->alternate_image_webp = Helper::uploadWebpImage($request->alternate_image, 'uploads/size/alternate/webp_image/', 'size');
           $size->alternate_image = Helper::uploadFile($request->alternate_image, 'uploads/size/alternate/image/', 'size');
       }
//        // listing size image : homepage
//        if ($request->hasFile('list_image')) {
//            $size->list_image_webp = Helper::uploadWebpImage($request->list_image, 'uploads/size/list/', 'size_list');
//            $size->list_image = Helper::uploadFile($request->list_image, 'uploads/size/list/', 'size_list');
//        }

        $size->banner_image_attribute = $request->banner_image_attribute ?? '';
        $size->image_attribute = $request->image_attribute ?? '';
       $size->alternate_image_attribute = $request->alternate_image_attribute ?? '';
//        $size->list_image_attribute = $request->list_image_attribute ?? '';

        $size->title = $validatedData['title'];
        $size->short_url = $request->short_url ?? '';
        $size->banner_title = $request->banner_title ?? '';

        $size->short_description = $request->short_description ?? '';
        $size->description = $request->description ?? '';
        $size->alternate_description = $request->alternate_description ?? '';

        $size->meta_title = $request->meta_title ?? $validatedData['title'];
        $size->meta_description = $request->meta_description ?? $validatedData['title'];
        $size->meta_keyword = $request->meta_keyword ?? $validatedData['title'];
        $size->other_meta_tag = $request->other_meta_tag ?? '';

        $sort_order = Size::orderBy('sort_order', 'DESC')->whereNull('parent_id')->first();
        if ($sort_order) {
            $sort_number = ($sort_order->sort_order + 1);
        } else {
            $sort_number = 1;
        }
        $size->sort_order = $sort_number;
        if ($size->save()) {
            session()->flash('success', 'size "' . $request->title . '" has been added successfully');
            return redirect(Helper::sitePrefix() . 'size/');
        } else {
            return back()->with('message', 'Error while creating Size');
        }
    }

    public function size_edit(Request $request, $id)
    {
        $key = "Update";
        $type = "size";
        $title = "Update Size";
        $size = Size::find($id);
        if ($size) {
            return view('app.size.form', compact('key', 'title', 'size', 'type'));
        } else {
            return view('web.error.404');
        }
    }

    public function size_update(Request $request, $id)
    {
        $size = Size::find($id);
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:255',
            'category' => 'nullable|min:2|max:255',

            'short_description' => 'required|string|min:2',
            'description' => 'required|min:2',
            'alternate_description' => 'nullable|min:2',

        ]);
        
        if ($request->hasFile('banner_image')) {
            Helper::deleteFile($size, 'banner_image');
            Helper::deleteFile($size, 'banner_image_webp');
            $size->banner_image_webp = Helper::uploadWebpImage($request->banner_image, 'uploads/size/banner/', 'size');
            $size->banner_image = Helper::uploadFile($request->banner_image, 'uploads/size/banner/', 'size');
        }
        // size image
        if ($request->hasFile('image')) {
            Helper::deleteFile($size, 'image');
            Helper::deleteFile($size, 'image_webp');
            $size->image_webp = Helper::uploadWebpImage($request->image, 'uploads/size/image/', 'size');
            $size->image = Helper::uploadFile($request->image, 'uploads/size/image/', 'size');
        }
        // alternate size image
        if ($request->hasFile('alternate_image')) {
            Helper::deleteFile($size, 'alternate_image');
            Helper::deleteFile($size, 'alternate_image_webp');
            $size->alternate_image_webp = Helper::uploadWebpImage($request->alternate_image, 'uploads/size/alternate/', 'size');
            $size->alternate_image = Helper::uploadFile($request->alternate_image, 'uploads/size/alternate/', 'size');
        }
//
//        // listing size image : homepage
//        if ($request->hasFile('list_image')) {
//            Helper::deleteFile($size, 'list_image');
//            Helper::deleteFile($size, 'list_image_webp');
//            $size->list_image_webp = Helper::uploadWebpImage($request->list_image, 'uploads/size/list/', 'size_list');
//            $size->list_image = Helper::uploadFile($request->list_image, 'uploads/size/list/', 'size_list');
//        }

        $size->banner_image_attribute = $request->banner_image_attribute ?? '';
        $size->image_attribute = $request->image_attribute ?? '';
//        $size->alternate_image_attribute = $request->alternate_image_attribute ?? '';
//        $size->list_image_attribute = $request->list_image_attribute ?? '';

        $size->title = $validatedData['title'];
        $size->short_url = $request->short_url ?? '';
        $size->banner_title = $request->banner_title ?? '';

        $size->short_description = $request->short_description ?? '';
        $size->description = $request->description ?? '';
        $size->alternate_description = $request->alternate_description ?? '';

        $size->meta_title = $request->meta_title ?? $validatedData['title'];
        $size->meta_description = $request->meta_description ?? $validatedData['title'];
        $size->meta_keyword = $request->meta_keyword ?? $validatedData['title'];
        $size->other_meta_tag = $request->other_meta_tag ?? '';
        $size->updated_at = date('Y-m-d h:i:s');

        if ($size->save()) {
            session()->flash('success', "size '" . $size->title . "' has been updated successfully");
            DB::commit();
            return redirect(Helper::sitePrefix() . 'size');
        } else {
            DB::rollBack();
            return back()->withInput($request->input())->withErrors("Error while updating the size");
        }
    }

    public function size_delete(Request $request)
    {
        if (isset($request->id) && $request->id != null) {
            $size = Size::find($request->id);
            if ($size) {
                if ($size->sub->count() > 0) {
                    echo(json_encode(array('status' => false, 'message' => 'size ' . $size->title . ' has sub sizes')));
                } else {
                    Helper::deleteFile($size, 'banner_image');
                    Helper::deleteFile($size, 'banner_image_webp');
                    $deleted = $size->delete();
                    if ($deleted == true) {
                        echo(json_encode(array('status' => true, 'message' => 'size deleted successfully')));
                    } else {
                        echo(json_encode(array('status' => false, 'message' => 'Some error occured,please try after sometime')));
                    }
                }
            } else {
                echo(json_encode(array('status' => false, 'message' => 'The requested size not found')));
            }
        } else {
            echo(json_encode(array('status' => false, 'message' => 'Empty value submitted')));
        }
    }


}
