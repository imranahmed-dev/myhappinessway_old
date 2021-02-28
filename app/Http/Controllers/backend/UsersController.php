<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function view(){
        $data = User::all();
        return view('backend.users.view-user', compact('data'));
    }
    public function add(){
        return view('backend.users.add-user');
    }
    public function stor(Request $request){
        $this->validate($request,[
            'user_type' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
        $data = new User;
        $data->usertype = $request->user_type;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        $notification = array(
            'message' => 'Successfully user added!',
            'alert-type' => 'success'
             );
        return redirect()->route('users.view')->with($notification);
    }
   public function edit($id){
       $editData = User::find($id);
     return view('backend.users.edit-user', compact('editData'));
   }
   public function update(Request $request,$id){
       $this->validate($request,[
            'user_type' => 'required',
            'name' => 'required',
            'email' => 'required|'
        ]);
        $data = User::find($id);
        $data->usertype = $request->user_type;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        $notification = array(
            'message' => 'Successfully user updated!',
            'alert-type' => 'success'
             );
        return redirect()->route('users.view')->with($notification);
    }
    public function delete($id){
        $dlt = User::find($id);
        $dlt->status=0;
        $dlt->save();
       
        $notification = array(
            'message' => 'Successfully user deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
