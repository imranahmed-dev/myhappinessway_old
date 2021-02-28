<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Tag;

class TagController extends Controller
{
    public function view(){
        $data = Tag::latest()->get();
        return view('backend.tag.view-tag', compact('data'));
    }
    
    public function add(){
        return view('backend.tag.add-tag');
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:tags,name'
        ]);
        $data = new Tag;
        $data->name = $request->name;
        $data->slug = Str::slug($request->name, '-');
        $data->description = $request->description;
        $data->save();
        
        $notification = array(
            'message' => 'Tag created successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function edit($id){
        $data = Tag::find($id);
        return view('backend.tag.edit-tag', compact('data'));
    }
    
    
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|unique:tags,name,'.$id,
        ]);
        $data = Tag::find($id);
        $data->name = $request->name;
        $data->slug = Str::slug($request->name, '-');
        $data->description = $request->description;
        $data->save();
        
        $notification = array(
            'message' => 'Tag updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function delete($id){
        $data = Tag::find($id);
        $data->status=0;
        $data->save();
        
        $notification = array(
            'message' => 'Tag deleted successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
        
    }
}
