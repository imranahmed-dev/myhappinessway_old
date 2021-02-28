        @extends('backend.layouts.master')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Manage Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!--Need Card-->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="m-0">Edit Profile
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('profiles.view')}}"><i class="fa fa-user"></i> Your profile</a>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('profiles.update')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>Name</label>
                                                <input class="form-control" type="text" name="name" value="{{($editData->name)}}">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input class="form-control" type="email" name="email" value="{{($editData->email)}}">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Phone Number</label>
                                                <input class="form-control" type="text" name="phone" value="{{($editData->phone)}}">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('phone'))?($errors->first('phone')):''}}</font>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>Address</label>
                                                <input class="form-control" type="text" name="address" value="{{($editData->address)}}">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Profile Picture</label>
                                                <input id="image" class="form-control" type="file" name="image" value="{{($editData->image)}}">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <img id="showImage" class="ml-2 profile-img img-fluid img-circle" src="{{(!empty($editData->image))?url($editData->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="User profile picture">
                                            </div>

                                        </div>
                                        <input class="btn btn-primary mt-3" type="submit" value="Save changes">
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection
