<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Image;
class ProjectController extends Controller
{
 public function add()
    {
       
        return view('admin.project.add');
    }

    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required',
            'count' => 'required',
            'image' => 'required',
           
        ]);
            $project = new Project();
            $project->name = $request->name;
            $project->count =$request->count;


         if($request->hasFile('image')){
           $image_tmp=$request->file('image');
          if($image_tmp->isValid()){
             $extension=$image_tmp->getClientOriginalExtension();
             $imageName=rand(111,99999).''.$extension;
             $imagePath='admin/project/'.$imageName;
             Image::make($image_tmp)->save($imagePath);
             $project->image=$imageName;
         }
     }
    $project->save();
      if ($project) {           
      $notification=array(
        'messege'=>'Project Added Successfully',
        'alert-type'=>'success'
         );
       return Redirect()->back()->with($notification);
 }
    }

    public function all()
    {
        $project=Project::all();
        return view('admin.project.index',compact('project'));
    }


    public function delete($id)
       {

        $delete = Project::find($id);
        $delete->delete();
        $notification=array(
        'messege'=>'Project Deleted Successfully',
        'alert-type'=>'success'
        );
      return Redirect()->back()->with($notification);

        }


        public function edit($id)
        {
        $edit_data=Project::find($id);
        return view('admin.project.edit',compact('edit_data'));
        }


        public function update(Request $request,$id)
        {
        
        $project =Project::find($id);
        $project->name = $request->name;
        $project->count =$request->count;


       if($request->hasFile('image')){
         $image_tmp=$request->file('image');
        if($image_tmp->isValid()){
           $extension=$image_tmp->getClientOriginalExtension();
           $imageName=rand(111,99999).''.$extension;
           $imagePath='admin/project/'.$imageName;
           Image::make($image_tmp)->save($imagePath);
           $project->image=$imageName;
       }
    }


        $project->save();
          if ($project) {           
          $notification=array(
            'messege'=>'Project Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.project')->with($notification);
     }
}
}
