<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Comment;
use App\User;
use Validator;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $findusercount = User::where('email',$request->email)->count();

         $finduser = User::where('email',$request->email)->first();

         if($findusercount>0)
         {
             
             $comment = New Comment();
             $comment->user_id = $finduser->id;
             $comment->post_id = $request->post_id;
             $comment->comments = $request->comments;
             $comment->status = 2;
             $comment->save();

            $notification = array(
                'message' => 'Comments created successfully!',
                'alert-type' => 'success'
            );
            
            return redirect()->back()->with($notification);
 
         }
         else{

             $notification = array(
                'message' => 'Please Create a account!',
                'alert-type' => 'error'
            );
            
            return redirect(route('login.view'))->with($notification);


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
