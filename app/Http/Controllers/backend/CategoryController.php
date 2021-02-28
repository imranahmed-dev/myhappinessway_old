<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Model\Category;

class CategoryController extends Controller
{
    public function view(){
        $data = Category::latest()->get();
        return view('backend.category.view-category', compact('data'));
    }
    
    public function add(){
        return view('backend.category.add-category');
    }
    
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        $data = new Category;
        $data->name = $request->name;
        $data->slug = Str::slug($request->name, '-');
        $data->description = $request->description;
        $image = $request->file('category_image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/frontend/categoryimage/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        $data->save();
        
        $notification = array(
            'message' => 'Category created successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function edit($id){
        $data = Category::find($id);
        return view('backend.category.edit-category', compact('data'));
    }
    
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,'.$id,
        ]);
        $data = Category::find($id);
        $data->name = $request->name;
        $data->slug = Str::slug($request->name, '-');
        $data->description = $request->description;
        $image = $request->file('category_image');
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/frontend/categoryimage/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            @unlink($data->image);
            $image->move($filepath,$imagename);
            $data['image'] = $imagename;
            
        }
        $data->save();
        
        $notification = array(
            'message' => 'Category updated successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    
    public function delete($id){
        $data = Category::find($id);
        $data->status=0;
        $data->save();

        
        $notification = array(
            'message' => 'Category deleted successfully!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
        
    }
}
