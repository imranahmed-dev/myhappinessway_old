@extends('frontend.dashboard.dashboard-master')
@section('dashboard')
<div class="col-md-9">
    <div class="cd-customer-name">
        <h3 class="text-custom">My Profile</h3>
    </div>
    <div class="customer-dashboard-body card">
        <!--customer profile area-->
        <div class="row">
            <div class="col">
                <div class="customer-ppn">
                    <div class="customer-pp text-center">
                        <img src="{{(!empty(Auth::user()->image))?url(Auth::user()->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="">
                    </div>
                    <h4 class="text-center mt-2">{{Auth::user()->name}}</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="customer-p-details card-body">
                    <nav>
                        <div class="nav nav-tabs  nav-fill shop-area-tab wow fadeInDown" id="nav-tab" role="tablist">

                            <a class=" nav-link active" id="nav-about-tab" data-toggle="tab" data-target="#nav-about" role="tab" aria-controls="nav-home" aria-selected="true">About</a>

                            <a class="nav-link" id="nav-edit-profile-tab" data-toggle="tab" data-target="#nav-edit-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Edit Profile</a>

                            <a class="nav-link" id="nav-settings-tab" data-toggle="tab" data-target="#nav-settings" role="tab" aria-controls="nav-profile" aria-selected="false">Settings</a>

                        </div>
                    </nav>
                    <div class="tab-content card-body" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

                            <div class="row">
                                <div class="col-4 pp-heading">
                                    <span>Name</span>
                                </div>
                                <div class="col-8 pp-body">
                                    <span>{{ $user->name }}</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4 pp-heading">
                                    <span>Email</span>
                                </div>
                                <div class="col-8 pp-body">
                                    <span>{{ $user->email }}</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4 pp-heading">
                                    <span>Mobile</span>
                                </div>
                                <div class="col-8 pp-body">
                                    <span>{{ $user->phone }}</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4 pp-heading">
                                    <span>Gender</span>
                                </div>
                                <div class="col-8 pp-body">
                                    <span>{{ $user->gender }}</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4 pp-heading">
                                    <span>Address</span>
                                </div>
                                <div class="col-8 pp-body">
                                    <span> {{ $user->address }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-edit-profile" role="tabpanel" aria-labelledby="nav-edit-profile-tab">

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{ route('profile.update',$user->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <label for="#">Name</label>
                                        <input class="form-control form-control-sm mb-3" name="name" type="text" value="{{ $user->name }}">

                                        <label for="#">Email</label>
                                        <input class="form-control form-control-sm mb-3" name="email" type="email" value="{{ $user->email }}">

                                        <label for="#">Mobile</label>
                                        <input class="form-control form-control-sm mb-3" name="phone" type="text" value="{{ $user->phone }}">

                                        <label for="#">Gender</label>
                                        <select name="gender" class="custom-select mb-3">
                                            <option {{ $user->gender == 'Male' ? 'selected' : '' }} value="Male">Male</option>
                                            <option {{ $user->gender == 'Female' ? 'selected' : '' }} value="Female">Female</option>
                                            <option {{ $user->gender == 'Others' ? 'selected' : '' }} value="Others">Others</option>
                                        </select>

                                        <label>Image</label>
                                        <input class="form-control mb-3" type="file" name="image">

                                        <img width="150" src="{{(!empty(Auth::user()->image))?url(Auth::user()->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="Image"><br><br>

                                        <label>Address</label>
                                        <textarea name="address" rows="5" class="form-control mb-3">{{ $user->address }}</textarea>

                                        <input class="btn btn-success" type="submit" value="Save Changes">

                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="nav-settings" role="tabpanel" aria-labelledby="nav-settings-tab">

                            <div class="row">
                                <div class="col-md-6">
                                    <form action="{{route('profile.password')}}" method="post">
                                        @csrf
                                        <div class="form-rowf">
                                           <div class="form-group">
                                                <label>Current Password</label>
                                                <input class="form-control" type="password" name="current_password" placeholder="Current password">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('current_password'))?($errors->first('current_password')):''}}</font>
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input class="form-control" type="password" name="new_password" placeholder="New password">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('new_password'))?($errors->first('new_password')):''}}</font>
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</font>
                                            </div>

                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
