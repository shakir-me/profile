<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Image;
class ServiceController extends Controller
{
    public function add()
        {
           
            return view('admin.service.add');
        }

        public function store(Request $request)
        {
             $validatedData = $request->validate([
                'name' => 'required',
                'image' => 'required',
               
            ]);
                $service = new Service();
                $service->name = $request->name;
                $service->desc =$request->desc;


             if($request->hasFile('image')){
               $image_tmp=$request->file('image');
              if($image_tmp->isValid()){
                 $extension=$image_tmp->getClientOriginalExtension();
                 $imageName=rand(111,99999).''.$extension;
                 $imagePath='admin/service/'.$imageName;
                 Image::make($image_tmp)->save($imagePath);
                 $service->image=$imageName;
             }
         }
        $service->save();
          if ($service) {           
          $notification=array(
            'messege'=>'Service Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     }
        }

        public function all()
        {
            $service=Service::all();
            return view('admin.service.index',compact('service'));
        }


        public function delete($id)
           {

            $delete = Service::find($id);
            $delete->delete();
            $notification=array(
            'messege'=>'Service Deleted Successfully',
            'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);

            }


            public function edit($id)
            {
            $edit_data=Service::find($id);
            return view('admin.service.edit',compact('edit_data'));
            }


            public function update(Request $request,$id)
            {
            
            $service =Service::find($id);
            $service->name = $request->name;
            $service->desc =$request->desc;



           if($request->hasFile('image')){
             $image_tmp=$request->file('image');
            if($image_tmp->isValid()){
               $extension=$image_tmp->getClientOriginalExtension();
               $imageName=rand(111,99999).''.$extension;
               $imagePath='admin/service/'.$imageName;
               Image::make($image_tmp)->save($imagePath);
               $service->image=$imageName;
           }
        }


            $service->save();
              if ($service) {           
              $notification=array(
                'messege'=>'Service Updated Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.service')->with($notification);
         }
    }
}
