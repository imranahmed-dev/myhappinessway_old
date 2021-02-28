@extends('frontend.layouts.master')
@section('content')

<section class="section-header login-header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-header-title text-center text-light">
                    <h4 class="text-light font-weight-bold">{{$user_info->name}} প্রোফাইল </h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="user-profile clearfix py-5">
    <div class="container">
        <div class="user-profile-box card card-body">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="customer-ppn" style="padding-top:0px;">
                        <div class="customer-pp text-center">
                            <img src="{{(!empty($user_info->image))?url($user_info->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="User Image">
                        </div>
                        <h4 class="text-center mt-2">{{$user_info->name}}</h4>
                    </div>
                    <div class="user-info table-responsive mt-3">
                        <table class="table table-bordered">
                            <tr>
                                <th>Email</th>
                                <td>{{$user_info->email}}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td>{{$user_info->phone}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$user_info->address}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <h4>পোস্ট সমূহ</h4>
                </div>
            </div>
            <div class="row align-items-stretch retro-layout-2">
                @foreach($user_posts as $post)
                <div class="col-md-3">
                    <a href="{{route('single.post',$post->slug)}}" class="h-entry mb-30 v-height gradient" style="background-image: url('{{asset($post->image)}}');">

                        <div class="text">
                            <h2>{{$post->title}}</h2>
                            <span class="date">{{$post->created_at->format('M d, Y')}}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection
