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
                                <li class="breadcrumb-item active">User</li>
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
                                    <h3 class="m-0">User List
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('users.add')}}"><i class="fa fa-plus-circle"></i> Add user</a>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <table id="users" class=" table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Role</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $user)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$user->usertype}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{route('users.edit',$user->id)}}"><i class="fa fa-edit"> Edit</i></a>

                                                    <a id="delete" class="btn btn-danger btn-sm" href="{{route('users.delete',$user->id)}}"><i class="fa fa-trash"> Delete</i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection
