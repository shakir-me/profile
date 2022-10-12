<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
class EducationController extends Controller
{
  public function add()
      {
         
          return view('admin.education.add');
      }

      public function store(Request $request)
      {
           $validatedData = $request->validate([
              'year' => 'required',
              'name' => 'required',
              'desc' => 'required',
             
          ]);
        $education = new Education();
        $education->year = $request->year;
        $education->name =$request->name;
        $education->desc =$request->desc;
        $education->save();
        if ($education) {           
        $notification=array(
          'messege'=>'Education Added Successfully',
          'alert-type'=>'success'
           );
         return Redirect()->back()->with($notification);
   }
      }

      public function all()
      {
          $education=Education::all();
          return view('admin.education.index',compact('education'));
      }


      public function delete($id)
         {

          $delete = Education::find($id);
          $delete->delete();
          $notification=array(
          'messege'=>'Education Deleted Successfully',
          'alert-type'=>'success'
          );
        return Redirect()->back()->with($notification);

          }


          public function edit($id)
          {
          $edit_data=Education::find($id);
          return view('admin.education.edit',compact('edit_data'));
          }


          public function update(Request $request,$id)
          {
          
          $education =Education::find($id);
          $education->year = $request->year;
          $education->name =$request->name;
          $education->desc =$request->desc;
          $education->save();
            if ($education) {           
            $notification=array(
              'messege'=>'Education Updated Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('all.education')->with($notification);
       }
  }
}
