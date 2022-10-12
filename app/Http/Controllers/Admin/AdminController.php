<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class AdminController extends Controller
{
      public function logout()
    {
        Auth::logout();
           $notification=array(
              'messege'=>'Admin Logout Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->route('login')->with($notification);
    }


    public function UpdateSetting()
        {
            $adminDetails=User::where('email',Auth::user()->email)->first()->toArray();
            return view('admin.setting.admin_setting')->with(compact('adminDetails'));
        }

        public function CheckAdminPassword(Request $request)
        {
            $data=$request->all();
            // echo"<pre>";
            // print_r($data);
            // die();
            if(Hash::check($data['current_password'],Auth::user()->password)){
                return "true";
            }else{
                return "false";
            }
        }

        public function UpdatePassword(Request $request)
        {
            $data=$request->all();
            // echo"<pre>";
            // print_r($data);
            // die();
            if(Hash::check($data['current_password'],Auth::user()->password)){
               if($data['confirm_password']==$data['new_password']){
                   User::where('id',Auth::user()->id)->update(['password'=>bcrypt($data['new_password'])]);
                   $notification=array(
                    'messege'=>'Your Current Passord Is Corrent',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
               }else{
                $notification=array(
                    'messege'=>'New Passord and Confirm Passord Not Matching',
                    'alert-type'=>'info'
                     );
                   return Redirect()->back()->with($notification);
               }
            }else{
               
                $notification=array(
                    'messege'=>'Your Current passord Is Not Incorrent',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
        }
}
