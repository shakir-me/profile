<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
class ExperienceController extends Controller
{
    public function add()
        {
           
            return view('admin.experience.add');
        }

        public function store(Request $request)
        {
             $validatedData = $request->validate([
                'year' => 'required',
                'name' => 'required',
                'desc' => 'required',
               
            ]);
          $experience = new Experience();
          $experience->year = $request->year;
          $experience->name =$request->name;
          $experience->desc =$request->desc;
          $experience->save();
          if ($experience) {           
          $notification=array(
            'messege'=>'Experience Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     }
        }

        public function all()
        {
            $experience=Experience::all();
            return view('admin.experience.index',compact('experience'));
        }


        public function delete($id)
           {

            $delete = Experience::find($id);
            $delete->delete();
            $notification=array(
            'messege'=>'Experience Deleted Successfully',
            'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);

            }


            public function edit($id)
            {
            $edit_data=Experience::find($id);
            return view('admin.experience.edit',compact('edit_data'));
            }


            public function update(Request $request,$id)
            {
            
            $experience =Experience::find($id);
            $experience->year = $request->year;
            $experience->name =$request->name;
            $experience->desc =$request->desc;
            $experience->save();
              if ($experience) {           
              $notification=array(
                'messege'=>'Experience Updated Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.experience')->with($notification);
         }
    }
}
