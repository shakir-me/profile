<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use Image;
class WorkController extends Controller
{
     public function add()
        {
           
            return view('admin.work.add');
        }

        public function store(Request $request)
        {
             $validatedData = $request->validate([
                'name' => 'required',
                'category_id' => 'required',
                'image' => 'required',
               
            ]);
                $work = new Work();
                $work->name = $request->name;
                $work->category_id =$request->category_id;
                $work->icon =$request->icon;
                $work->link =$request->link;


             if($request->hasFile('image')){
               $image_tmp=$request->file('image');
              if($image_tmp->isValid()){
                 $extension=$image_tmp->getClientOriginalExtension();
                 $imageName=rand(111,99999).''.$extension;
                 $imagePath='admin/work/'.$imageName;
                 Image::make($image_tmp)->save($imagePath);
                 $work->image=$imageName;
             }
         }
        $work->save();
          if ($work) {           
          $notification=array(
            'messege'=>'Work Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     }
        }

        public function all()
        {
            $work=Work::all();
            return view('admin.work.index',compact('work'));
        }


        public function delete($id)
           {

            $delete = Work::find($id);
            $delete->delete();
            $notification=array(
            'messege'=>'Work Deleted Successfully',
            'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);

            }


            public function edit($id)
            {
            $edit_data=Work::find($id);
            return view('admin.work.edit',compact('edit_data'));
            }


            public function update(Request $request,$id)
            {
            
            $work =Work::find($id);
            $work->name = $request->name;
            $work->category_id =$request->category_id;
            $work->icon =$request->icon;
            $work->link =$request->link;
           if($request->hasFile('image')){
             $image_tmp=$request->file('image');
            if($image_tmp->isValid()){
               $extension=$image_tmp->getClientOriginalExtension();
               $imageName=rand(111,99999).''.$extension;
               $imagePath='admin/work/'.$imageName;
               Image::make($image_tmp)->save($imagePath);
               $work->image=$imageName;
           }
        }


            $work->save();
              if ($work) {           
              $notification=array(
                'messege'=>'Work Updated Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.work')->with($notification);
         }
    }
}
