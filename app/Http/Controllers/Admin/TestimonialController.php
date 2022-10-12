<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Image;
class TestimonialController extends Controller
{
     public function add()
        {
           
            return view('admin.testimonial.add');
        }

        public function store(Request $request)
        {
             $validatedData = $request->validate([
                'name' => 'required',
                'designation' => 'required',
                'image' => 'required',
               
            ]);
                $testimonial = new Testimonial();
                $testimonial->name = $request->name;
                $testimonial->designation =$request->designation;
                $testimonial->desc =$request->desc;


             if($request->hasFile('image')){
               $image_tmp=$request->file('image');
              if($image_tmp->isValid()){
                 $extension=$image_tmp->getClientOriginalExtension();
                 $imageName=rand(111,99999).''.$extension;
                 $imagePath='admin/testimonial/'.$imageName;
                 Image::make($image_tmp)->save($imagePath);
                 $testimonial->image=$imageName;
             }
         }
        $testimonial->save();
          if ($testimonial) {           
          $notification=array(
            'messege'=>'Testimonial Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     }
        }

        public function all()
        {
            $testimonial=Testimonial::all();
            return view('admin.testimonial.index',compact('testimonial'));
        }


        public function delete($id)
           {

            $delete = Testimonial::find($id);
            $delete->delete();
            $notification=array(
            'messege'=>'Testimonial Deleted Successfully',
            'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);

            }


            public function edit($id)
            {
            $edit_data=Testimonial::find($id);
            return view('admin.testimonial.edit',compact('edit_data'));
            }


            public function update(Request $request,$id)
            {
            
            $testimonial =Testimonial::find($id);
            $testimonial->name = $request->name;
            $testimonial->designation =$request->designation;
            $testimonial->desc =$request->desc;



           if($request->hasFile('image')){
             $image_tmp=$request->file('image');
            if($image_tmp->isValid()){
               $extension=$image_tmp->getClientOriginalExtension();
               $imageName=rand(111,99999).''.$extension;
               $imagePath='admin/testimonial/'.$imageName;
               Image::make($image_tmp)->save($imagePath);
               $testimonial->image=$imageName;
           }
        }


            $testimonial->save();
              if ($testimonial) {           
              $notification=array(
                'messege'=>'Testimonial Updated Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.testimonial')->with($notification);
         }
    }
}
