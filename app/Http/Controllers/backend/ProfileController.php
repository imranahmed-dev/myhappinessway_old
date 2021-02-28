<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function view(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.users.view-profile', compact('user'));
    }
    public function edit(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('backend.users.edit-profile', compact('editData'));
    }
    public function update(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $this->validate($request,[
            'email' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $image = $request->file('image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/user_image/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            @unlink($data->image);
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        $data->save();
        $notification = array(
            'message' => 'Successfully profile updated!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
    }
    public function passwordEdit(){
        return view('backend.users.edit-password');
    }
    public function passwordUpdate(Request $request){
    
       $this->validate($request,[
            'current_password' => 'required',
            'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        if(Auth::attempt(['id' => Auth::user()->id, 'password' => $request->current_password])){
            $user = User::find(Auth::user()->id);
            $user->password = bcrypt($request->new_password);
            $user->save();
            $notification = array(
            'message' => 'Successfully password changed.',
            'alert-type' => 'success'
             );
            return redirect()->route('profiles.view')->with($notification);
        }else{
            $notification = array(
            'message' => 'Sorry! Your current password dost not match.',
            'alert-type' => 'error'
             );
            return redirect()->back()->with($notification);
        }
    }
}
