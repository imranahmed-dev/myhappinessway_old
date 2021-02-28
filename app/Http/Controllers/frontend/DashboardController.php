<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Category;
use Auth;
use Carbon\Carbon;
use App\Model\Post;
use App\Model\Comment;
use App\Model\Tag;
use App\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = User::find(Auth::user()->id);
        $data['totalpost'] = Post::where('user_id',Auth::user()->id)->count();
        $data['totalcomment'] = Comment::where('user_id',Auth::user()->id)->count();
        $data['postview'] = Post::where('user_id',Auth::user()->id)->sum('post_view');

         return view('frontend.dashboard.dashboard',$data);
    }
    
    public function write_post(){
        
        $data['categories'] = Category::all();
        $data['tags'] = Tag::all();
        return view('frontend.dashboard.write-post',$data);
    }
    public function post_list(){
        $id = Auth::user()->id;
        $data['posts'] = Post::where('user_id',$id)->get();
        return view('frontend.dashboard.post-list',$data);
    }
    public function profile_view(){

        $data['user'] = User::find(Auth::user()->id);

        return view('frontend.dashboard.profile',$data);
    }


    public function profileUpdate(Request $request,$id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->gender = $request->gender;
        $data->address = $request->address;
        $data->password = bcrypt($request->password);

        $image = $request->file('image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/user_image/';
            @unlink($data->image);
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            
            $data->image = $imagename;
        }
        $data->save();
        
        $notification = array(
            'message' => 'Profile Update Successfully!',
            'alert-type' => 'success'
             );
        return redirect()->back()->with($notification);
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
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
            'message' => 'Sorry! Your current password dost not match.',
            'alert-type' => 'error'
             );
            return redirect()->back()->with($notification);
        }
    }

}