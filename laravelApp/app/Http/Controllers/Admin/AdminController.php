<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function addcategory(){
        $cats=DB::table('categories')->get();
        return view('dashboard/admin/admin_addcategory',compact('cats'));
    }
    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:admins,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'هذا الحساب غير موجود'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('admin.home')->with('success','Incorrect credentials');
        }else{
            return redirect()->route('admin.login')->with('fail','Incorrect credentials');
        }
   }
   function logout(){
    Auth::guard('admin')->logout();
    return redirect('/admin/login');
    }
    function store_category(Request $request){
        //Validate Inputs
        $request->validate([
            'name'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
         ]);
         $category=new Category();
         $category->name=$request->name;
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/category_Img/',$filename);
            $category->image=$filename;
            # code...
        }
        
        if($category->save())
        {
            return redirect('/admin/addcategory');
        }
        else
        {
            return redirect('/admin/addcategory').with('mistak','هناك خطاء ما');

        }


    }
    function update(Request $request,Category $category){
        $category->name=$request->name;
        if ($request->hasFile('image')) {
            $destination='uploads/category_Img/'.$category->image;
            if(File::exists($destination))
            {
                File::delete($destination);

            }
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/category_Img/',$filename);
            $category->image=$filename;
            # code...
        }
        if($category->update())
        {
            return redirect('/admin/addcategory');
        }
        else
        {
            return redirect('/admin/addcategory').with('errupt','هناك خطاء ما');

        }
    }
    function delete(Category $category){
        $category->delete();
        return back();

    }
    function addjob(){

    }
    function showjobbycat(Category $category){
        return view('job_by_cat',compact('category'));

    }
}
