@extends('frontend.layouts.master')
@section('content')

<div class="site-section bg-light">
    <div class="container">
        <div class="row align-items-stretch retro-layout-2">
            <div class="col-md-4">
                @foreach($topFirstPosts as $post)
                <a href="{{route('single.post',$post->slug)}}" class="h-entry mb-30 v-height gradient" style="background-image: url('{{asset($post->image)}}');">

                    <div class="text">
                        <h2>{{$post->title}}</h2>
                        <span class="date">{{$post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($topMiddlePosts as $post)
                <a href="{{route('single.post',$post->slug)}}" class="h-entry img-5 h-100 gradient" style="background-image: url('{{asset($post->image)}}');">

                    <div class="text">
                        <div class="post-categories mb-3">
                            <span class="post-category bg-danger">{{$post->category->name}}</span>
                        </div>
                        <h2>{{$post->title}}</h2>
                        <span class="date">{{$post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
            </div>
            <div class="col-md-4">
                @foreach($topLastPosts as $post)
                <a href="{{route('single.post',$post->slug)}}" class="h-entry mb-30 v-height gradient" style="background-image: url('{{asset($post->image)}}');">

                    <div class="text">
                        <h2>{{$post->title}}</h2>
                        <span class="date">{{$post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<section class="blog-category py-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="mb-3">ক্যাটাগরি</h3>
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
        <div class="row">
            <div class="col">
                <div class="all-cat text-center mt-4">
                    <a class="btn btn-primary" href="{{route('all.category')}}"> <i class="fa fa-arrow-down"></i> সকল ক্যাটাগরী সমূহ</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="site-section bg-white">
    <div class="container">
       <div class="row">
           <div class="col">
               <h3 class="mb-3">নতুন পোস্ট সমূহ</h3>
           </div>
       </div>
        <div class="row">
            @foreach($recentPosts as $post)
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
                {{$recentPosts->links()}}
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-light">
    <div class="container">

        <div class="row align-items-stretch retro-layout">

            <div class="col-md-5 order-md-2">
                @foreach($bottomLastPosts as $post)
                <a href="{{route('single.post',$post->slug)}}" class="hentry img-1 h-100 gradient" style="background-image: url('{{asset($post->image)}}');">
                    <span class="post-category text-white bg-danger">{{$post->category->name}}</span>
                    <div class="text">
                        <h2>{{$post->title}}</h2>
                        <span>{{$post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach
            </div>

            <div class="col-md-7">
                @foreach($bottomFirstPosts1 as $post)
                <a href="{{route('single.post',$post->slug)}}" class="hentry img-2 v-height mb30 gradient" style="background-image: url('{{asset($post->image)}}');">
                    <span class="post-category text-white bg-success">{{$post->category->name}}</span>
                    <div class="text text-sm">
                        <h2>{{$post->title}}</h2>
                        <span>{{$post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach


                <div class="two-col d-block d-md-flex">
                    @foreach($bottomFirstPosts2 as $post)
                    <a href="{{route('single.post',$post->slug)}}" class="hentry v-height img-2 mx-auto gradient" style="background-image: url('{{asset($post->image)}}');">
                        <span class="post-category text-white bg-primary">{{$post->category->name}}</span>
                        <div class="text text-sm">
                            <h2>{{$post->title}}</h2>
                            <span>{{$post->created_at->format('M d, Y')}}</span>
                        </div>
                    </a>
                    @endforeach
                </div>


            </div>
        </div>

    </div>
</div>


<div class="site-section bg-lightx">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-5">
                <div class="subscribe-1 ">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
                    <form action="{{ route('subscribe.store') }}"  class="d-flex" method="post">
                        @csrf
                        <input type="text" name="email" class="form-control" placeholder="Enter your email address">
                        <input type="submit" class="btn btn-primary" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
