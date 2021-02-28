        @extends('backend.layouts.master')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Manage User</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit user</li>
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
                                    <h3 class="m-0">Edit User
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('users.view')}}"><i class="fa fa-list"></i> User list</a>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{route('users.update',$editData->id)}}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>User type</label>
                                                <select class="form-control" name="user_type">
                                                    <option value="">Select type</option>
                                                    
                                                    <option value="Admin" {{($editData->usertype == "Admin")?"selected":""}} >Admin</option>
                                                    
                                                    <option value="User" {{($editData->usertype == "User")?"selected":""}} >User</option>
                                                </select>
                                                <font style='color:red; padding: 0 5px;'>{{($errors->has('user_type'))?($errors->first('user_type')):''}}</font>
                                            </div>
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

                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Update">
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection
