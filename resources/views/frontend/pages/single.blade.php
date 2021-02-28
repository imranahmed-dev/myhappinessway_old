@extends('frontend.layouts.master')
@section('content')


<div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('{{asset($post->image)}}');">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="post-entry text-center">
                    <span class="post-category text-white bg-success mb-3">{{$post->category->name}}</span>
                    <h1 class="mb-4"><a href="javascript:void();">{{$post->title }}</a></h1>
                    <div class="post-meta align-items-center text-center">
                        <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="@if(@$post->user->image){{asset($post->user->image)}}@else{{asset('public/frontend/userimage/profile.png')}}@endif" alt="Image" class="img-fluid"></figure>
                        <span class="d-inline-block mt-1">By @if(@$post->user->name) <a href="{{route('user.profile',$post->user->id)}}">{{$post->user->name}}</a> @else <span class="text-danger">Deleted user</span> @endif</span>
                        <span>&nbsp;-&nbsp; {{$post->created_at->format('M d, Y')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="site-section py-lg">
    <div class="container">

        <div class="row blog-entries element-animate">

            <div class="col-md-12 col-lg-8 main-content">

                <div class="post-content-body">

                    <p>{!! $post->description !!}</p>
                </div>


                <div class="pt-5">
                    <p>ক্যাটাগরি: <a href="{{route('frontend.category', ['slug' => $post->category->slug])}}" class="badge badge-primary">{{$post->category->name}}</a> </p>
                </div>

                <div>
                    <p>ট্যাগ:
                        @foreach($post->tags as $tagss)

                        <a href="{{route('frontend.tag', ['slug' => $tagss->slug])}}" class="badge badge-primary">{{$tagss->name}}</a>

                        @endforeach
                    </p>
                </div>





                <div class="pt-5">
                    <h3 class="mb-5">{{ $commentcount }} মন্তব্য</h3>
                    <ul class="comment-list">

                        @foreach($comments as $comment)

                        <li class="comment">
                            <div class="vcard">
                                <img src="{{asset('public/frontend')}}/userimage/profile.png" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>{{ $comment->user->name }}</h3>
                                <div class="meta">{{$comment->created_at->format('M d, Y')}}</div>
                                <p> {{ $comment->comments }}</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Leave a comment</h3>
                        <form action="{{ route('comment.store') }}" class="p-5 bg-light" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="comments" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Post Comment" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="@if(@$post->user->image){{asset($post->user->image)}}@else{{asset('public/frontend/userimage/profile.png')}}@endif" alt="Image Placeholder" class="img-fluid mb-3">
                        <div class="bio-body">
                            <h2>@if(@$post->user->name){{$post->user->name}} @else <span class="text-danger">Deleted user</span> @endif</h2>
                            @if(@$post->user->id != Null)
                            <p><a href="{{route('user.profile',$post->user->id)}}" class="btn btn-primary btn-sm rounded px-4 py-2">প্রোফাইল দেখুন</a></p>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- END sidebar-box -->
                <div class="sidebar-box">
                    <h3 class="heading">ফিচার পোস্ট</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            @php
                            $moreread = App\Model\Post::where('user_id',$post->user->id)->where('status',2)->limit(3)->get();
                            @endphp

                            @foreach($moreread as $post)
                            <li>
                                <a href="{{route('single.post',$post->slug)}}">

                                    <img src="{{asset($post->image)}}" alt="Image placeholder" class="mr-4">
                                    <div class="text">
                                        <h4>{{$post->title}}</h4>
                                        <div class="post-meta">
                                            <span class="mr-2">{{$post->created_at->format('M d, Y')}} </span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">ক্যাটাগরি</h3>
                    <ul class="categories">
                        @foreach($categories as $category)
                        @php
                        $postcount = App\Model\Post::where("category_id",$category->id)->count();
                        @endphp
                        <li><a href="{{route('frontend.category', ['slug' => $category->slug])}}">{{$category->name}} <span>({{ $postcount }})</span></a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- END sidebar-box -->

                <div class="sidebar-box">
                    <h3 class="heading">ট্যাগ</h3>
                    <ul class="tags">
                        @foreach($tags as $tag)
                        <li><a href="{{route('frontend.tag', ['slug' => $tag->slug])}}">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- END sidebar -->

        </div>
    </div>
</section>

<div class="site-section bg-light">
    <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <h2>নতুন পোস্ট সমূহ</h2>
            </div>
        </div>

        <div class="row align-items-stretch retro-layout">

            <div class="col-md-5 order-md-2">
                @foreach($relatedpostLastPosts as $post)
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
                @foreach($relatedpostFirstPosts1 as $post)
                <a href="{{route('single.post',$post->slug)}}" class="hentry img-2 v-height mb30 gradient" style="background-image: url('{{asset($post->image)}}');">
                    <span class="post-category text-white bg-success">{{$post->category->name}}</span>
                    <div class="text text-sm">
                        <h2>{{$post->title}}</h2>
                        <span>{{$post->created_at->format('M d, Y')}}</span>
                    </div>
                </a>
                @endforeach



                <div class="two-col d-block d-md-flex">
                    @foreach($relatedpostFirstPosts2 as $post)
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
                    <form action="#" class="d-flex">
                        <input type="text" class="form-control" placeholder="Enter your email address">
                        <input type="submit" class="btn btn-primary" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
