<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Image;
class AboutController extends Controller
{
    public function AboutUs()
    {
       $about=About::first();

       //dd($about);
        return view('admin.about.about')->with(compact('about'));;
    }

    public function AboutUpdate(Request $request,$id){

            $about= About::find($id);
             $about->title=$request->title;
             $about->short_desc=$request->short_desc;
             $about->email=$request->email;
             $about->phone=$request->phone;
             $about->current_city=$request->current_city;
             $about->age=$request->age;
             $about->degree=$request->degree;
             $about->freelance=$request->freelance;

            if($request->hasFile('image')){
                   $image_tmp=$request->file('image');
                  if($image_tmp->isValid()){
                     $extension=$image_tmp->getClientOriginalExtension();
                     $imageName=rand(111,99999).''.$extension;
                     $imagePath='admin/about/'.$imageName;
                     Image::make($image_tmp)->save($imagePath);
                     $about->image=$imageName;
                 }
             }
          $about->save();
                    
            $notification=array(
              'messege'=>'About Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
    
}
}