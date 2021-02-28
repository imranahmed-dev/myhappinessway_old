@extends('frontend.dashboard.dashboard-master')
@section('dashboard')
<div class="col-md-9">
    <div class="customer-dashboard-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Post</h5>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label>Post Title</label>
                            <input class="form-control mb-3" type="text" name="title" placeholder="Enter title" value="{{old('title')}}">

                            <label>Select Category</label>
                            <select name="category" class="custom-select mb-3">

                                <option selected style="display:none;" value="">Select Category</option>

                                @foreach($categories as $category)

                                <option value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach

                            </select>

                            <label>Image</label>
                            <input id="image" class="form-control mb-3" type="file" name="image">
                            <img style="padding:4px;border:1px solid gray;" width="250" id="showImage" class="mt-2 img-fluid mb-3" src="{{url('public/uploaded/user_default/no-image-icon.png')}}" alt="User profile picture"><br>

                            <label>Choose Post Tags</label>
                            <div class="d-flex flex-wrap">
                                @foreach($tags as $tag)
                                <div class="form-group mb-3 mr-2">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="tag{{$tag->id}}" value="{{$tag->id}}" name="tags[]">
                                        <label for="tag{{$tag->id}}" class="custom-control-label">{{$tag->name}}</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <label>Description</label>
                            <textarea class="form-control mb-3 mt-4" placeholder="Enter description" name="description" id="summernote">{{old('description')}}</textarea>

                            <input class="btn btn-primary" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
