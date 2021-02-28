@extends('frontend.layouts.master')
@section('content')

<section class="section-header regi-header">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-header-title text-center text-light">
                    <h4 class="text-light font-weight-bold">রেজিস্ট্রেশন </h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="regi-page py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h5>Have any Account ? <a href="{{route('login.view')}}">লগইন</a></h5>
                <div class="regi-page-form card card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <form action="{{route('registration.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                        <h4 class="mb-3">ইউজার রেজিস্ট্রেশন</h4>

                        <label for="#">নাম</label>
                        <input class="form-control mb-2" type="text" name="name" placeholder="আপনার নাম লিখুন">
                        <label for="#">ইমেইল ( ইংরেজি )</label>
                        <input class="form-control mb-2" type="email" name="email" placeholder="ইমেইল লিখুন ( ইংরেজিতে )">

                        <label for="#">মোবাইল নাম্বার:</label>
                        <input class="form-control mb-2" type="text" name="mobile_number" placeholder="মোবাইল নাম্বার">

                        <label for="#">পোফাইল পিকচার:</label>
                        <input  id="image" class="form-control mb-2" type="file" name="profile_picture">
                        
                        <img style="padding:4px;border:1px solid gray;" width="250" id="showImage" class="mt-2 img-fluid mb-3" src="{{url('public/uploaded/user_default/no-image-icon.png')}}" alt="User profile picture"><br>

                        <label for="">জেন্ডার:</label>
                        <select name="gender" id="#" class="custom-select mb-2">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                        <label for="#">ঠিকানা:</label>
                        <textarea class="form-control mb-2" name="address" id="#" cols="30" rows="3" placeholder="ঠিকানা"></textarea>
                        <label for="#">পাসওয়ার্ড:</label>
                        <input class="form-control mb-2" type="password" name="password" placeholder="পাসওয়ার্ড">
                        <label for="#">কমফার্ম পাসওয়ার্ড:</label>
                        <input class="form-control mb-2" type="password" name="password_confirmation" placeholder="কমফার্ম পাসওয়ার্ড">

                        <button class="btn btn-primary" type="submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
