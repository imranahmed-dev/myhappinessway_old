        @extends('backend.layouts.master')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Manage Password</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">change password</li>
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
                                    <h3 class="m-0">Change Password
                                        
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('profiles.update.password')}}" method="post">
                                        @csrf
                                        <div class="form-row">
                                           <div class="form-group col-md-4">
                                                <label>Current Password</label>
                                                <input class="form-control" type="password" name="current_password" placeholder="Current password">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('current_password'))?($errors->first('current_password')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>New Password</label>
                                                <input class="form-control" type="password" name="new_password" placeholder="New password">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('new_password'))?($errors->first('new_password')):''}}</font>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Confirm Password</label>
                                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</font>
                                            </div>

                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Submit">
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection
