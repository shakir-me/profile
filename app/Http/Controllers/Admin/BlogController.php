<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Image;
class BlogController extends Controller
{
   public function add()
        {
           
            return view('admin.blog.add');
        }

        public function store(Request $request)
        {
             $validatedData = $request->validate([
                'title' => 'required',
                'image' => 'required',
               
            ]);
                $blog = new Blog();
                $blog->title = $request->title;
                $blog->date =$request->date;
                $blog->short =$request->short;
                $blog->long =$request->long;
                $blog->slug =Str::slug($request->title);

             if($request->hasFile('image')){
               $image_tmp=$request->file('image');
              if($image_tmp->isValid()){
                 $extension=$image_tmp->getClientOriginalExtension();
                 $imageName=rand(111,99999).''.$extension;
                 $imagePath='admin/blog/'.$imageName;
                 Image::make($image_tmp)->save($imagePath);
                 $blog->image=$imageName;
             }
         }
        $blog->save();
          if ($blog) {           
          $notification=array(
            'messege'=>'Blog Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     }
        }

        public function all()
        {
            $blog=Blog::all();
            return view('admin.blog.index',compact('blog'));
        }


        public function delete($id)
           {

            $delete = Blog::find($id);
            $delete->delete();
            $notification=array(
            'messege'=>'Blog Deleted Successfully',
            'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);

            }


            public function edit($id)
            {
            $edit_data=Blog::find($id);
            return view('admin.blog.edit',compact('edit_data'));
            }


            public function update(Request $request,$id)
            {
            
           $blog =Blog::find($id);
           $blog->title = $request->title;
           $blog->date =$request->date;
           $blog->short =$request->short;
           $blog->long =$request->long;
           $blog->slug =Str::slug($request->title);



           if($request->hasFile('image')){
             $image_tmp=$request->file('image');
            if($image_tmp->isValid()){
               $extension=$image_tmp->getClientOriginalExtension();
               $imageName=rand(111,99999).''.$extension;
               $imagePath='admin/blog/'.$imageName;
               Image::make($image_tmp)->save($imagePath);
               $blog->image=$imageName;
           }
        }


            $blog->save();
              if ($blog) {           
              $notification=array(
                'messege'=>'Blog Updated Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.blog')->with($notification);
         }
    } //
}
