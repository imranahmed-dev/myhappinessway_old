<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Category;
use Auth;
use Carbon\Carbon;
use App\Model\Post;
use App\Model\Tag;

class PostController extends Controller
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


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:posts,title',
            'category' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,webp',
            'description' => 'required',
            'tags' => 'required'
            
        ]);
        
        $data = new Post;
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->category_id = $request->category;
        $data->user_id = Auth::user()->id;
        $data->user_type = "User";
        $data->post_view = 1;
        $data->status = 1;
        $data->published_at = Carbon::now();
        $image = $request->file('image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/posts_image/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        $data->save();
        $data->tags()->attach($request->tags);
        
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->route('post.list')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data['post'] = Post::where('slug', $slug)->first();
        return view('frontend.dashboard.post-show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        
        $data['tags'] = Tag::all();
        $data['categories'] = Category::all();
        
        $data['post'] = Post::where('slug', $slug)->first();
        
        return view('frontend.dashboard.post-edit',$data);
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
        $validatedData = $request->validate([
            'title' => 'required|unique:posts,title,'.$id,
            'category' => 'required',
            'image' => 'mimes:jpeg,jpg,png,webp',
            'description' => 'required',
            'tags' => 'required'
            
        ]);
        $data = Post::find($id);
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->description = $request->description;
        $data->category_id = $request->category;
        $image = $request->file('image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/uploaded/posts_image/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            @unlink($data->image);
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        
        $data->save();
        $data->tags()->sync($request->tags);
        $notification = array(
            'message' => 'Post updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
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
