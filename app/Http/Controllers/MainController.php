<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\About;
use App\Models\Project;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Category;
use DB;
class MainController extends Controller
{
    public function Index()
    {
        $setting=DB::table('settings')->first();
        $about=DB::table('abouts')->first();
        $project=Project::all();
        $testimonial=Testimonial::all();
        $service=Service::all();
        $education=Education::all();
        $experience=Experience::all();
        $blog=Blog::all();
        $category=Category::all();
        //return response()->json($education);
    
        return view('pages.index',compact('setting','about','project','testimonial','service','education','experience','blog','category'));
    }

    public function Store(Request $request){

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email =$request->email;
            $contact->number =$request->number;
            $contact->msg =$request->msg;
            $contact->save();
             if ($contact) {           
             $notification=array(
               'messege'=>'Contact Added Successfully',
               'alert-type'=>'success'
                );
              return Redirect()->back()->with($notification);
            }

    }
}
