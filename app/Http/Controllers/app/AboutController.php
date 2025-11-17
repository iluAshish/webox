<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_verify_email');
    }



    public function about_us()
    {
        $key = "Update";
        $title = "About Us";
        $about = AboutUs::first();
        return view('app.about.about_us_form', compact('key', 'title', 'about'));
    }

    public function about_us_store(Request $request)
    {
         $validatedData = $request->validate([
            'title' => 'required|min:2|max:230',
            'description' => 'nullable|min:2',
            'image' => 'image|mimes:jpeg,png,jpg|max:512',
            'image_attribute' => 'nullable|min:2|max:230',
        ]);

        if ($request->id == 0) {
            $about = new AboutUs;
        } else {
            $about = AboutUs::find($request->id);
            $about->updated_at = now();
        }
        if ($request->hasFile('image')) {
            Helper::deleteFile($about, 'image');
            Helper::deleteFile($about, 'webp_image');
            $about->webp_image = Helper::uploadWebpImage($request->image, 'uploads/about-us/image/', 'about');
            $about->image = Helper::uploadFile($request->image, 'uploads/about-us/image/', 'about');
        }


        $about->title = $request->title ?? '';
        $about->sub_title = $request->sub_title ?? '';
        $about->short_description = $request->short_description ?? '';
        $about->description = $request->description ?? '';
        $about->alternate_description = $request->alternate_description ?? '';
        $about->image_attribute = $request->image_attribute ?? '';
        if ($about->save()) {
            session()->flash('success', 'About Us content has been updated successfully');
            return redirect(Helper::sitePrefix() . 'about-us');
        } else {
            return back()->with('error', 'Error while updating the about content');
        }
    }
}
