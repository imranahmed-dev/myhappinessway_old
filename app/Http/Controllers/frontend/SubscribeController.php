<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Subscribe;
use Validator;


class SubscribeController extends Controller
{
    public function store(Request $request)
    {

    	 $validator = Validator::make($request->all(), [
            'email' => 'required'
        ]);



        if ($validator->fails()) {

           $notification = array(
                'message' => 'Email Field are required!',
                'alert-type' => 'success'
            );
            
        		 return redirect()->back()->with($notification);
			}

	        else{


	    	 $subscribe = New Subscribe();
		     $subscribe->email = $request->email;
		     $subscribe->status =1;
		     $subscribe->save();
	        
	         $notification = array(
	                'message' => 'You are successfully Subscribe!',
	                'alert-type' => 'success'
	            );
	            
	         return redirect()->back()->with($notification);
	    }
	}


}