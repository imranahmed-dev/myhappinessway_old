<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class LoginRegistrationController extends Controller
{

    public function registration_store(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:users,email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $data = new User;
        $data->usertype = "User";
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->mobile_number;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->password = bcrypt($request->password);
        $image = $request->file('profile_picture');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/user_image/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            
            $data->image = $imagename;
        }
        $data->save();
        
        $notification = array(
            'message' => 'Registration Successfully!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
        
    }
}
