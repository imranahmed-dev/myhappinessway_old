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
                                <li class="breadcrumb-item active">Profile</li>
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
                        <section class="col-md-8 offset-md-2">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3>Your Profile</h3>
                                </div>
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-img img-fluid img-circle" src="{{(!empty($user->image))?url($user->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{(!empty($user->name))?($user->name):"No name"}}</h3>

                                    <p class="text-muted text-center">{{($user->usertype)}}</p>

                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{($user->name)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{($user->email)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{($user->phone)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>{{($user->address)}}</td>
                                            </tr>
                                            <tr>
                                                <th>Role</th>
                                                <td>{{($user->usertype)}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <a href="{{route('profiles.edit')}}" class="btn btn-primary btn-block mt-2"><b>Edit profile</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection
