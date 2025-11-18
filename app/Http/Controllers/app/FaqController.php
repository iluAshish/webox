<?php

namespace App\Http\Controllers\app;


use Illuminate\Http\Request;

use App\Models\Faq;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helper;
use App\Models\Service;
use App\Models\Size;

class FaqController extends Controller
{
    //FAQ section
    public function faq()
    {
        $title = "Faq List";
        $faqLists = Faq::get();
        $services = Service::active()->select('id', 'title')->get();
        $sizes = Size::active()->select('id', 'title')->get();
        
        return view('app.faq.list',compact('faqLists','title','services','sizes'));
    }

    public function faq_create()
    {
        $key = "Add";
        $title = "Add Faq";
        $services = Service::active()->select('id', 'title')->get();
        $sizes = Size::active()->select('id', 'title')->get();

        return view('app.faq.form',compact('key','title','services','sizes'));
    }

    public function faq_store(Request $request)
    {

        $validatedData = $request->validate([
            'title'=>'required',
            'answer' =>'required',
        ]);
        $faq = new Faq();
        
        $faq->faq_title = $validatedData['title'];

        $faq->short_url = $request->short_url ?? '';
       
        $faq->answer = $request->answer ?? '';
        
        
        // services_ids
        if ($request->services_ids) {
            $faq->services_ids = array_values(array_filter($request->services_ids));
        } else {
            $faq->services_ids = null;
        }

        // sizes_ids
        if ($request->sizes_ids) {
            $faq->sizes_ids = array_values(array_filter($request->sizes_ids));
        } else {
            $faq->sizes_ids = null;
        }

        
        $sort_order = Faq::orderBy('sort_order', 'DESC')->first();
        if ($sort_order) {
            $sort_number = ($sort_order->sort_order + 1);
        } else {
            $sort_number = 1;
        }
        $faq->sort_order = $sort_number;
        if($faq->save()){
            session()->flash('success', 'Faq has been added successfully');
            return redirect(Helper::sitePrefix().'faq');
        }else{
            return back()->withInput($request->input())->withErrors("Error while updating the content");
        }
    }

    public function faq_edit(Request $request, $id)
    {
        $key = "Update";
        $title = "Update Faq";
        $services = Service::active()->select('id', 'title')->get();
        $sizes = Size::active()->select('id', 'title')->get();
        $faq = Faq::find($id);
        if($faq){
            return view('app.faq.form', compact('faq','title','key','services','sizes'));
        }else{
            return view('app/errors/404');
        }
    }

    public function faq_update(Request $request, $id)
    {
        $faq =  Faq::find($id);
        $validatedData = $request->validate([
            'title'=>'required',
            'answer' =>'required',
        ]);
       
        $faq->faq_title = $validatedData['title'];
        
       
        
        // services_ids
        if ($request->services_ids) {
            $faq->services_ids = array_values(array_filter($request->services_ids));
        } else {
            $faq->services_ids = null;
        }

        // sizes_ids
        if ($request->sizes_ids) {
            $faq->sizes_ids = array_values(array_filter($request->sizes_ids));
        } else {
            $faq->sizes_ids = null;
        }


        $faq->short_url = $request->short_url ?? '';

        $faq->updated_at = date('Y-m-d h:i:s');
        $faq->answer = $request->answer ?? '';
        if($faq->save()){
            session()->flash('success', 'Faq has been updated successfully');
            return redirect(Helper::sitePrefix().'faq');
        }else{
            return back()->withInput($request->input())->withErrors("Error while updating the content");
        }
    }

    public function faq_delete(Request $request){
        if(isset($request->id) && $request->id!=NULL){
            $faq = Faq::find($request->id);
            if($faq){
                DB::beginTransaction();
                $deleted = $faq->delete();
                if($deleted==true){
                    DB::commit();
                    echo(json_encode(array('status'=>true)));
                }else{
                    echo(json_encode(array('status'=>false,'message'=>'Some error occured,please try after sometime')));
                }
            }else{
                DB::rollBack();
                echo(json_encode(array('status'=>false,'message'=>'Model class not found')));
            }
        }else{
            echo(json_encode(array('status'=>false,'message'=>'Empty value submitted')));
        }
    }

    public function faq_popular(Request $request){
        $state = $request->state;
        $primary_key = $request->id;
        if($state=='true'){
            $status = "Yes";
        }else{
            $status = "No";
        }
        $data = Faq::find($primary_key);
        if($data!=NULL){
            $data->popular = $status;
            if($data->save()){
                echo(json_encode(array('status'=>true,'message'=>'Popular option status has been changed')));
            }else{
                echo(json_encode(array('status'=>false,'message'=>'Error while changing the popular option')));
            }
        }else{
            echo(json_encode(array('status'=>false,'message'=>'Client not found')));
        }
    }

    public function sort_order(Request $request)
    {
        if (isset($request->id) && $request->id != NULL) {
            $table = $request->table;
            $appPrefix = 'App';
            $model = $appPrefix . '\\Models\\' . $table;
            if ($request->extra != NULL) {
                $sortOrder = $model::where([['sort_order', '=', $request->sort_order], [$request->extra, '=', $request->extra_key], ['id', '!=', $request->id]])->count();
            } else {
                $sortOrder = $model::where([['sort_order', '=', $request->sort_order], ['id', '!=', $request->id]])->count();
            }         
            $data = $model::find($request->id);
            $data->sort_order = $request->sort_order;
            if ($data->save()) {
                return response()->json(['status' => true, 'message' => 'Sort order updated successfully']);
            } else {
                return response()->json(['status' => false, 'message' => 'Error while updating the sort order']);
            }
        } else {
            return response()->json(['status' => false, 'message' => 'Empty value submitted']);
        }
    }

    public function status_change(Request $request)
    {
        $table = $request->table;
        $state = $request->state;
        $primary_key = $request->primary_key;
        if ($state == 'true') {
            $status = "Active";
        } else {
            $status = "Inactive";
        }
        $appPrefix = 'App';
        $model = $appPrefix . '\\Models\\' . $table;
        $data = $model::find($primary_key);
        $data->status = $status;
        if ($data->save()) {
            echo "1";
        } else {
            echo "2";
        }
    }

}
