@extends('frontend.dashboard.dashboard-master')
@section('dashboard')

<div class="col-md-9">
    <div class="cd-customer-name">
        <h3 class="text-custom">Welcome Back, {{ $user->name }}</h3>
    </div>
    <div class="customer-dashboard-body">
        <div class="row">
            <div class="col-md-3">
                <div class="card dashboard-box bg-primary mb-2 mb-md-0">
                    <div class="dashbox-txt">
                        <span>{{ $totalpost }}</span>
                        <p>মোট পোস্ট</p>
                    </div>
                    <a href="{{ route('post.list') }}" class="small-box-footer">সব গুলো দেখুন <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-success  mb-2 mb-md-0">
                    <div class="dashbox-txt">
                        <span>{{ $totalcomment }}</span>
                        <p>মোট মন্তব্য</p>
                    </div>
                    <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card dashboard-box bg-info   mb-2 mb-md-0">
                    <div class="dashbox-txt">
                        <span>{{ $postview }}</span>
                        <p>মোট ভিউ</p>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            

        </div>
    </div>
</div>
@endsection
