<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Setting::where('id',1)->first();
        return view('backend.setting.view-setting',compact('content'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            
        ]);
        $data = Setting::where('id',1)->first();
        $data->website_name = $request->website_name;
        $data->facebook_link = $request->facebook_link;
        $data->twitter_link = $request->twitter_link;
        $data->instagram_link = $request->instagram_link;
        $data->youtube_link = $request->youtube_link;
        $data->about_website = $request->about_website;
        $data->copyright_text = $request->copyright_text;
        $data->about_us_text = $request->about_us_text;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $logo = $request->file('website_logo');
        if($logo){
            $uniqname = uniqid();
            $ext = strtolower($logo->getClientOriginalExtension());
            $filepath = 'public/uploaded/logo/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $logo->move($filepath,$imagename);
            
            $data->website_logo = $imagename;
        }
        $about_image = $request->file('about_us_image');
        if($about_image){
            $uniqname = uniqid();
            $ext = strtolower($about_image->getClientOriginalExtension());
            $filepath = 'public/uploaded/logo/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $about_image->move($filepath,$imagename);
            
            $data->about_us_image = $imagename;
        }
        
          $data->save();
        
        $notification = array(
            'message' => 'Webwebsite content updated!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }

}
