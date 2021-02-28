@extends('frontend.layouts.master')
@section('content')
@php
$route = Route::current()->getName();
@endphp
<!--start profile section -->
<section class="customer-dashboard clearfix py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card customer-dashboard-menu mb-3 mb-md-0">
                    <div class="card-header bg-dark text-light customer-menu-header">
                        <h4 class="m-0 text-light">আপনার একাউন্ট</h4>
                    </div>
                    <ul>
                        <li><a class="@if($route == 'dashboard.view') customer-menu-active @endif" href="{{route('dashboard.view')}}"><i class="fa fa-tachometer"></i> ড্যাসবোর্ড</a></li>
                        <li><a class="@if($route == 'write.post') customer-menu-active @endif" href="{{route('write.post')}}" href="{{route('write.post')}}"><i class=" fa fa-pencil"></i> পোস্ট লিখুন</a></li>
                        <li><a class="@if($route == 'post.list') customer-menu-active @endif" href="{{route('post.list')}}" href="{{route('post.list')}}"><i class="fa fa-list"></i> সমস্ত পোস্ট</a></li>
                        <li><a class="@if($route == 'profile.view') customer-menu-active @endif" href="{{route('profile.view')}}" href="{{route('profile.view')}}"><i class="fa fa-user"></i> প্রোফাইল</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-sign-out"></i> লগ আউট</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('dashboard')

        </div>
    </div>
</section>
<!--end profile section -->

@endsection
