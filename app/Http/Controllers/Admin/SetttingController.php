<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Image;
class SetttingController extends Controller
{
    public function Setting(){
        $setting=Setting::first();

             //dd($about);
         return view('admin.setting.setting')->with(compact('setting'));;
    }

     public function Update(Request $request,$id){

             $setting= Setting::find($id);
             $setting->whatsapp=$request->whatsapp;
             $setting->ins=$request->ins;
             $setting->twitter=$request->twitter;
             $setting->facebook=$request->facebook;
             $setting->name=$request->name;
             $setting->title=$request->title;
             $setting->email=$request->email;
             $setting->address=$request->address;
             $setting->phone=$request->phone;

            if($request->hasFile('image')){
                   $image_tmp=$request->file('image');
                  if($image_tmp->isValid()){
                     $extension=$image_tmp->getClientOriginalExtension();
                     $imageName=rand(111,99999).''.$extension;
                     $imagePath='admin/setting/'.$imageName;
                     Image::make($image_tmp)->save($imagePath);
                     $setting->image=$imageName;
                 }
             }

             if($request->hasFile('fvicon')){
                    $image_tmp=$request->file('fvicon');
                   if($image_tmp->isValid()){
                      $extension=$image_tmp->getClientOriginalExtension();
                      $imageName=rand(111,99999).''.$extension;
                      $imagePath='admin/setting/'.$imageName;
                      Image::make($image_tmp)->save($imagePath);
                      $setting->fvicon=$imageName;
                  }
              }
                if ($request->hasfile('file')) {
                        $file=$request->file;
              $filename= \Carbon\Carbon::now()->toDateString() . "-" . uniqid() .     '.'. $file->getClientOriginalExtension();
              $request->file->move('admin/file/' ,$filename);
              $setting->file=$filename;
                         
                         }   
          $setting->save();
                    
            $notification=array(
              'messege'=>'setting Update Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
    
}
}
