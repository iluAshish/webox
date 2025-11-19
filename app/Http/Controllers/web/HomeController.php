<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Models\AboutUs;
use App\Models\DhabiProduct;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\WhyChooseUs;
use App\Models\GroupCompanies;
use App\Models\Brands;
use App\Models\ProductGallery;
use App\Models\ProductSpecification;
use App\Models\Blog;
use App\Models\Enquiry;
use App\Models\HomeAboutUs;
use App\Models\KeyFeature;
use App\Models\MetaTag;
use App\Models\SectionHeading;
use App\Models\Service;
use App\Models\SiteInformation;
use App\Models\HomeBanner;
use App\Models\Testimonial;
use App\Models\Banner;
use App\Models\HomeVideoBanner;
use App\Models\PortfolioGallery;
use App\Models\Location;
use App\Models\Size;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use Session;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function __construct()
    {
        $siteInformation = SiteInformation::first();
        $menu = Service::active()->whereNull('parent_id')->orderBy('sort_order')->get();
        $menufooter = Service::active()->whereNull('parent_id')->orderBy('sort_order')->take(8)->get();
        $sub_menu_data = Service::active()->whereNotNull('parent_id')->oldest('sort_order')->get();
        $services_list = Service::where('status', 'Active')->whereNull('parent_id')->orderBy('sort_order')->get();
        $blogCount = Blog::active()->count();
        $servicesCount = Service::active()->count();
        $testimonialCount = Testimonial::active()->count();
        $abut_us_data = AboutUs::first();
        $locationList = Location::active()->orderBy('sort_order')->get();
        $portfolio_menu = Portfolio::where('status','Active')->orderBy('sort_order')->get();
        $categories_menu=Category::where('status','Active')->whereNull('parent_id')->orderBy('sort_order')->get();
        $sizes = Size::where('status','Active')->whereNull('parent_id')->orderBy('sort_order')->get();
        return View::share(compact(
            'siteInformation',
            'menu',
            'menufooter',
            'sub_menu_data',
            'servicesCount',
            'blogCount',
            'locationList',
            'portfolio_menu',
            'categories_menu',
            'testimonialCount',
            'services_list',
            'abut_us_data',
            'sizes'
        ));
    }

    public function seo_content($type, $page_name, $key = NULL)
    {
        if ($type == 1) {
            $meta_data = MetaTag::where('page_name', $page_name)->first();
            return $meta_data;
        } else {
            $model = 'App\\Models\\' . $page_name;
            $meta_data = $model::find($key);
            return $meta_data;
        }
    }

    public function home()
    {

        $meta_data = $this->seo_content(1, 'Home');
        $homeBanners = HomeBanner::active()->orderBy('sort_order')->get();
        $homeAbout = HomeAboutUs::first();
        $video_banner = HomeVideoBanner::first();
        $prducts=DhabiProduct::where('status','Active')->where('display_to_home','Yes')->get();
        $categories=Category::where('status','Active')->where('display_to_home','Yes')->whereNull('parent_id')->orderBy('sort_order')->get();
        $clients=GroupCompanies::where('status','Active')->orderBy('sort_order')->get();
        $partners=Brands::where('status','Active')->orderBy('sort_order')->get();
        $keyFeatures = KeyFeature::where('deleted_at',NULL)->orderBy('sort_order')->get();
        $why_choose_us = WhyChooseUs::first();
        $services = Service::where('status','Active')->whereNull('parent_id')->orderBy('sort_order')->take(8)->get();
        $group_companies = GroupCompanies::active()->orderBy('sort_order')->get();
        $testimonials = Testimonial::where('status','Active')->orderBy('sort_order')->get();
        $portfolioLists = Portfolio::active()->latest()->take(6)->get();


        return view('web.index', compact(
            'meta_data',
            'video_banner',
            'homeBanners',
            'homeAbout',
            'prducts',
            'categories',
            'why_choose_us',
            'keyFeatures',
            'clients',
            'partners',
            'group_companies',
            'services',
            'testimonials',
            'portfolioLists'
        ));
    }


    public function portfolio()
    {
        $banner = Banner::type('Portfolio')->first();
        $meta_data = $this->seo_content(1, 'portfolio');
        $condition = Portfolio::where('status','Active')->orderBy('sort_order')->get();
        $totalPortfolio = $condition->count();
        $portfolios = $condition;
        $offset = $portfolios->count();
        $loading_limit = 4;
        $latest=Portfolio::where('status','Active')->orderBy('sort_order')->take(10)->get();
        return view('web.portfolio',compact('portfolios','banner','totalPortfolio','offset','loading_limit','meta_data'));
    }
    public function portfolioLoadMore(Request $request)
    {
        $offset = $request->offset;
        $loading_limit = $request->loading_limit;
        $portfolio_id = $request->portfolio_id;
        $condition = PortfolioGallery::active();
        // $totalBlog = $condition->count();
        // $totalPortfolio = $condition->count();
        // $portfolios = $condition->skip($offset)->take($loading_limit)->get();
        // $offset += $portfolios->count();
        if($portfolio_id==0){
            $totalportfolio = $condition->count();
            $portfolios = PortfolioGallery::active()->orderBy('sort_order')->skip($offset)->take($loading_limit)->get();
            $offset += $portfolios->count();
        }else{
            $totalportfolio = PortfolioGallery::active()->latest()->where('portfolio_id', $portfolio_id)->count();
            $portfolios = PortfolioGallery::active()->where('portfolio_id', $portfolio_id)->orderBy('sort_order')->skip($offset)->take($loading_limit)->get();
            $offset += $portfolios->count();
        }
        return view('web.includes.portfoliolist', compact( 'loading_limit','offset','portfolios','totalportfolio','portfolio_id'));
    }

    public function contact()
    {
        return redirect('/contact-us');

    }

    public function about_us()
    {
        $meta_data = $this->seo_content(1, 'About');
        $banner = Banner::type('About')->first();
        $about = AboutUs::first();
        $clients=GroupCompanies::where('status','Active')->orderBy('sort_order')->get();
        $keyFeatures = KeyFeature::where('deleted_at',NULL)->orderBy('sort_order')->get();
        $why_choose_us = WhyChooseUs::first();
        return view('web.about', compact(
            'meta_data',
            'banner',
            'about',
            'why_choose_us',
            'clients',
            'keyFeatures'
        ));
    }




    public function products()
    {
        $meta_data = $this->seo_content(1, 'products');
        $condition=Category::where('status','Active')->whereNull('parent_id')->orderBy('sort_order')->get();
        $banner = Banner::type('Products')->first();
        $totalProducts = $condition->count();

        $categories = $condition;
        $offset = $categories->count();
        $limit = 4;
        return view('web.product', compact(
            'meta_data',
            'banner',
             'totalProducts',
            'categories',
             'offset',
             'limit'
        ));
    }
         public function categoryProductLoadMore(Request $request)
     {
         $offset = $request->offset;
         $loading_limit = $request->loading_limit;
         $count = $request->count;
         $condition = Category::where('status','Active')->whereNull('parent_id')->orderBy('sort_order');
         $totalproducts = $condition->count();
         $categories = $condition->skip($offset)->take($loading_limit)->get();
         $offset += $categories->count();

         return view('web.includes.productcategory_list', compact( 'loading_limit', 'totalproducts', 'offset', 'categories','count'));
     }

    public function category_detail($shorturl)
    {
        $category_products = Category::active()->where('short_url',$shorturl)->first();
        $meta_data =  $this->seo_content(0, 'Category', $category_products->id);
        $category_id = $category_products->id;
        $related_category = Category::active()->where('id', '!=', $category_id)->get();
        $condition=DhabiProduct::where('status','Active')->where('category_id',$category_id )->orderBy('sort_order')->get();
        $totalProducts = $condition->count();
        $products = $condition->take(4);
        $offset = $products->count();
        $loading_limit = 4;
        if ($category_products) {
            return view('web.category_detail', compact(
                'category_products',
                'meta_data',
                'related_category',
                'totalProducts',
                'loading_limit',
                'offset',
                'products'
            ));
        } else {
            return view('web.error.404');
        }
    }

    public function singleCategoryProductLoadMore(Request $request)
    {
        $offset = $request->offset;
        $loading_limit = $request->loading_limit;
        $category_id = $request->category_id;
        $condition = DhabiProduct::where('status','Active')->get();
        $totalProducts = $condition->count();
        $products = $condition->where('category_id',$category_id )->skip($offset)->take($loading_limit);
        $offset += $products->count();

        return view('web.includes.categoryproduct_list', compact( 'loading_limit', 'totalProducts', 'offset', 'products'));
    }
    public function product_detail($shorturl)
    {

        $product=DhabiProduct::where('status','Active')->where('short_url',$shorturl )->get()->first();
        $product_id = $product->id;
        $meta_data =  $this->seo_content(0, 'DhabiProduct', $product->id);
        // $productGalleryList = ProductGallery::where('product_id', '=', $product_id)->get();
        $productGalleryList = ProductGallery::where('product_id', $product_id)->where('status', 'Active')->orderBy('sort_order')->get();
        $specifications = ProductSpecification::where('product_id', $product_id)->where('status', 'Active')->orderBy('sort_order')->get();
        $related_category = Category::active()->get();
        if ($product) {
            return view('web.product_detail', compact(
                'meta_data',
                'product',
                'productGalleryList',
                'specifications',
                'related_category'
            ));
        } else {
            return view('web.error.404');
        }
    }
    public function blogs()
    {
        $meta_data = $this->seo_content(1, 'Blog');
        $banner = Banner::type('Blog')->first();
        $condition = Blog::active()->latest('posted_date')->latest();
        $totalBlog = $condition->count();

        $blogs = $condition->take(4)->get();
        $offset = $blogs->count();
        $loading_limit = 4;
        return view('web.blogs', compact(
            'meta_data',
            'banner',
            'totalBlog',
            'blogs',
            'offset',
            'loading_limit'
        ));
    }

     public function blogLoadMore(Request $request)
     {
         $offset = $request->offset;
         $loading_limit = $request->loading_limit;
         $condition = Blog::active()->latest('posted_date')->latest();
         $totalBlog = $condition->count();
         $blogs = $condition->latest('posted_date')->skip($offset)->take($loading_limit)->get();
         $offset += $blogs->count();

         return view('web.includes.blog_list', compact('blogs', 'loading_limit', 'totalBlog', 'offset', 'blogs'));
     }


    public function blog_detail($shorturl)
    {
        $blog = Blog::active()->where('short_url',$shorturl)->first();
        if ($blog) {
            $banner = Banner::type('Blog')->first();
            $meta_data =  $this->seo_content(0, 'Blog', $blog->id);
            $recentBlogs = Blog::active()
                    ->where('id', '!=', $blog->id)
                    ->orderBy('posted_date', 'desc')
                    ->limit(5)
                    ->get();
            $latest=Blog::where('status','Active')->latest('posted_date')->take(10)->get();
            $previousBlog = Blog::where('status', 'Active')
                ->where('posted_date', '<', $blog->posted_date)
                ->orderBy('posted_date', 'desc')
                ->first();

                $nextBlog = Blog::where('status', 'Active')
                ->where('posted_date', '>', $blog->posted_date)
                ->orderBy('posted_date', 'asc')
                ->first();
                // dd($previousBlog,$nextBlog);
            $services = Service::whereNull('parent_id')->active()->get();
            return view('web.blog_detail', compact(
                'blog',
                'recentBlogs',
                'meta_data',
                'previousBlog',
                'nextBlog',
                'banner',
                'latest',
                'services'
            ));
        } else {
            return view('web.error.404');
        }
    }

    public function contact_us()
    {
        $meta_data = $this->seo_content(1, 'Contact');
        $banner = Banner::type('Contact')->first();
        $siteInformation = SiteInformation::first();
        $SectionHeading=SectionHeading::where('type', 'contact')->first();
        $locations = Location::where('status','Active')->orderBy('sort_order')->get();
        return view('web.contact', compact('meta_data', 'banner', 'siteInformation','SectionHeading','locations'));
    }


    public function services()
    {

        $meta_data = $this->seo_content(1, 'Services');
        $banner = Banner::type('Services')->first();
        $condition = Service::where('status','Active')->whereNull('parent_id')->orderBy('sort_order')->get();
        $totalServices = $condition->count();
        $services = $condition->take(4);
        $offset = $services->count();
        $loading_limit = 4;

        return view('web.service', compact(
            'meta_data',
            'totalServices',
            'banner',
            'offset',
            'loading_limit',
            'services'
        ));
    }
    
    public function sizes()
    {
        $meta_data = $this->seo_content(1, 'Services'); 
        $banner = Banner::type('Services')->first();    

        $condition = Size::where('status','Active')
            ->whereNull('parent_id')
            ->orderBy('sort_order')
            ->get();

        $totalSize = $condition->count();
        $sizes = $condition->take(4);
        $offset = $sizes->count();
        $loading_limit = 4;

        // if your view is sizes.blade.php use 'web.sizes'
        return view('web.sizes', compact(
            'meta_data',
            'totalSize',
            'banner',
            'offset',
            'loading_limit',
            'sizes'
        ));
    }

    public function serviceLoadMore(Request $request)
    {
         $offset = $request->offset;
         $loading_limit = $request->loading_limit;
         $condition = Service::where('status','Active')->whereNull('parent_id')->orderBy('sort_order');
         $totalServices = $condition->count();
         $services = $condition->skip($offset)->take($loading_limit)->get();
         $offset += $services->count();

         return view('web.includes.services_list', compact( 'loading_limit', 'totalServices', 'offset', 'services'));
    }

    public function containerLoadMore(Request $request)
    {
    //   dd($request->all());
        $offset = $request->offset;
        $limit = $request->limit;
        $category_id = $request->category_id;

        $containers_all = DhabiProduct::where('status','Active')->where('category_id',$category_id )->orderBy('sort_order');
        $total = $containers_all->count();
        $containers = $containers_all->skip($offset)->take($limit)->get();
        $offset += $containers->count();

       

    
        //  $condition = Service::where('status','Active')->whereNull('parent_id')->orderBy('sort_order');
        //  $totalServices = $condition->count();
        //  $services = $condition->skip($offset)->take($limit)->get();
        //  $offset += $services->count();

         return view('web.includes.containers_list', compact( 'limit', 'total', 'offset', 'containers','category_id'));
     }


    public function service_detail($short_url)
    {
        $id="1";
        $service_details = Service::active()->where('short_url', $short_url)->first();
        //    $services = Service::active()->orderBy('sort_order')->get();
        if ($service_details) {
            $meta_data = $this->seo_content(0, 'Service', $service_details->id);
            $other_services = Service::where('short_url', '!=', $short_url)->where('parent_id', NULL)->active()->get();
            $service = Service::active()->where('short_url', $short_url)->first();
            if ($service) {
                $subServices = Service::where('parent_id','=', $service_details->id)->where('id', '!=', $service->id)->active()->get();
            }

            $service_banner = Banner::type('Services')->first();
            return view('web.service_detail', compact(
                'meta_data',
                'service_details',
                'other_services',
                // 'services',
                'subServices',
                'service_banner',
                'id'
            ));
        } else {
            return view('web.error.404');
        }
    }
    
    public function size_detail($short_url)
    {
        $id = "1";
        $service_details = Size::active()->where('short_url', $short_url)->first();

        if ($service_details) {
            $meta_data = $this->seo_content(0, 'Service', $service_details->id);
            $other_services = Size::where('short_url', '!=', $short_url)
                ->whereNull('parent_id')
                ->active()
                ->get();

            $service = Size::active()->where('short_url', $short_url)->first();
            $subServices = collect(); // default empty

            if ($service) {
                $subServices = Size::where('parent_id', $service_details->id)
                    ->where('id', '!=', $service->id)
                    ->active()
                    ->get();
            }

            $service_banner = Banner::type('Services')->first();

            return view('web.size_detail', compact(
                'meta_data',
                'service_details',
                'other_services',
                'subServices',
                'service_banner',
                'id'
            ));
        } else {
            return view('web.error.404');
        }
    }


    public function terms_and_conditions()
    {
        $meta_data = $this->seo_content(1, 'Terms');
        $banner = Banner::where('type', 'Terms-conditions')->first();

        return view('web.terms_and_conditions', compact('meta_data', 'banner'));
    }

    public function privacy_policy()
    {
        $meta_data = $this->seo_content(1, 'Privacy');
        $banner = Banner::where('type', 'Privacy-policy')->first();
        return view('web.privacy-policy', compact('meta_data', 'banner'));
    }


    public function enquiry(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'phone' => 'required|regex:/^([0-9\+]*)$/|min:7|max:17',
            'email' => 'required|email',
        ]);
        $enquiry = new Enquiry();
        $enquiry->name = $request->name;
        $enquiry->phone = $request->phone;
        $enquiry->message = $request->message;
        $enquiry->email = $request->email;
        $enquiry->enquiry_type = $request->enquiry_type ? $request->enquiry_type : 'contact-us';
        $enquiry->request_url = url()->previous();

        if ($enquiry->save()) {

            $sendContactMail = Helper::SendContactMail($enquiry);

            if ($sendContactMail) {

            } else {
                echo json_encode(array('status' => 'success', 'message' => "Error while submit the request"));
            }
        } else {
            return response()->json(['status' => 'error', 'message' => 'Error while submit the request']);
        }
        return view('web.thankyou');
    }

    public function serviceEnquiry(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'phone' => 'required|regex:/^([0-9\+]*)$/|min:7|max:17',
            'email' => 'required|email',
            'recaptcha_response' => 'required'
        ]);
        
        $client = new \GuzzleHttp\Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => '6LflJZwrAAAAADmlikos9KjWwEDgtc1387JQIt-T',
                'response' => $request->recaptcha_response,
            ],
        ]);
    
        $result = json_decode($response->getBody());
        if ($result->success) { 
            $enquiry = new Enquiry();
            $enquiry->name = $request->name;
            $enquiry->phone = $request->phone;
            $enquiry->email = $request->email;
            $enquiry->date_of_appointment = $request->date_of_appointment ?? null;
            $enquiry->no_of_passengers = $request->no_of_passengers ?? null;
            $enquiry->type = $request->type ?? '';
            $enquiry->product_id = $request->product_id ?? null;
            $enquiry->service_id = $request->service_id;
            $enquiry->size_id = $request->size_id ?? null;
            //$enquiry->sub_service_id = $request->sub_service;
            $enquiry->message = $request->message;
            $enquiry->request_url = url()->previous();
            $enquiry->enquiry_type = $request->enquiry_type ? $request->enquiry_type : 'service-detail';
            if ($enquiry->save()) {
                $sendContactMail = Helper::SendServiceEnquiryMail($enquiry);
                if ($sendContactMail) {
                    toast('Enquiry submited!','success','top-right');
                    return view('web.thankyou');
                } else {
                    echo json_encode(array('status' => 'success', 'message' => "Error while submit the request"));
                }
            } else {
                return response()->json(['status' => 'error', 'message' => 'Error while submit the request']);
            }
            
        }else{
            return response()->json(['status' => 'error', 'message' => 'Invalid reCAPTCHA. Please try again.']);
        
        }
    }
    public function page_404(){
        return view('web.error.404');
    }
}
