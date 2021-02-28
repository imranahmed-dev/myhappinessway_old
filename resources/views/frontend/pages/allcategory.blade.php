@extends('frontend.layouts.master')
@section('content')

<section class="blog-category py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mb-3">সকল ক্যাটাগরী সমূহ</h3>
            </div>
        </div>
        <div class="row">
            @foreach($categories as $category)
            <div class="col-md-3">
                <div class="category-box text-center card mb-2">
                    <a href="{{route('frontend.category', ['slug' => $category->slug])}}">
                        <img src="{{asset($category->image)}}" alt="Image" class="img-fluid category-img">
                        <div class="category-name p-2">
                            <h5 class="m-0">{{$category->name}}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
