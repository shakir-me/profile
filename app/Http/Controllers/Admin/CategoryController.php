<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function add()
        {
           
            return view('admin.category.add');
        }

        public function store(Request $request)
        {
             $validatedData = $request->validate([
                'name' => 'required',
               
            ]);
          $category = new Category();
          $category->name =$request->name;
          $category->slug =Str::slug($request->name);
          $category->save();
          if ($category) {           
          $notification=array(
            'messege'=>'Category Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
     }
        }

        public function all()
        {
            $category=Category::all();
            return view('admin.category.index',compact('category'));
        }


        public function delete($id)
           {

            $delete = Category::find($id);
            $delete->delete();
            $notification=array(
            'messege'=>'Category Deleted Successfully',
            'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification);

            }


            public function edit($id)
            {
            $edit_data=Category::find($id);
            return view('admin.category.edit',compact('edit_data'));
            }


            public function update(Request $request,$id)
            {
            
            $category =Category::find($id);
            $category->name =$request->name;
            $category->slug =Str::slug($request->name);
            $category->save();
              if ($category) {           
              $notification=array(
                'messege'=>'Category Updated Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.category')->with($notification);
         }
    }
}
