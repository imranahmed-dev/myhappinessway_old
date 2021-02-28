@extends('frontend.layouts.master')
@section('content')

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span>Tag</span>
                <h3>{{$tag->name}}</h3>
                @if($tag->description)
                <p>{{$tag->description}}</p>
                @else
                <p>Category Description not available in this category</p>
                @endif
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-white">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4 mb-4">
                <div class="entry2">
                    <a href="{{route('single.post',$post->slug)}}"><img src="{{url($post->image)}}" alt="Image" class="img-fluid rounded"></a>
                    <div class="excerpt">
                        <span class="post-category text-white bg-primary mb-3"><a class="text-light" href="{{route('frontend.category', ['slug' => $post->category->slug])}}">{{$post->category->name}}</a></span>
                        <span class="badge badge-secondary"><i class="fa fa-eye"></i> {{ $post->post_view }}</span>

                        <h2><a href="{{route('single.post',$post->slug)}}">{{$post->title}}</a></h2>
                        <div class="post-meta align-items-center text-left clearfix">
                            <figure class="author-figure mb-0 mr-3 float-left"><img src="@if(@$post->user->image){{asset($post->user->image)}}@else{{asset('public/frontend/userimage/profile.png')}}@endif" alt="Image" class="img-fluid"></figure>
                            
                            <span class="d-inline-block mt-1">By <a href="#">@if(@$post->user->name)<a href="{{route('user.profile',$post->user->id)}}">{{$post->user->name}}</a> @else <span class="text-danger">Deleted user</span> @endif</a></span>
                            
                            <span>&nbsp;-&nbsp; {{$post->created_at->format('M d, Y')}}</span>
                        </div>

                        <p> {!! Str::words($post->description, 20) !!} </p>
                        <p><a href="{{route('single.post',$post->slug)}}">Read More</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row text-center pt-5 border-top">
            <div class="col-md-12">
                {{$posts->links()}}
            </div>
        </div>
    </div>
</div>

@endsection
