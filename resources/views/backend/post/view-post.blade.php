        @extends('backend.layouts.master')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Manage Post</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Post List</li>
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
                                    <h5 class="m-0">Post List
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('posts.add')}}"><i class="fa fa-plus-circle"></i> Add Post</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <table id="users" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Tags</th>
                                                <th>Author</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td><img width="80" src="{{url($row->image)}}" alt=""></td>
                                                <td>{{$row->title}}</td>
                                                <td>{{$row->category->name}}</td>
                                                <td>
                                                    @foreach($row->tags as $tags)
                                                    <span class="badge badge-primary">{{$tags->name}}</span>
                                                    @endforeach
                                                </td>
                                                <td>@if(@$row->user->name){{$row->user->name}} @else <span class="text-danger">Deleted user</span> @endif</td>
                                                <td>
                                                    <a class="btn btn-success btn-sm" href="{{route('posts.show',$row->id)}}"><i class="fa fa-eye"></i></a>

                                                    <a class="btn btn-info btn-sm" href="{{route('posts.edit',$row->id)}}"><i class="fa fa-edit"></i></a>

                                                    <a id="delete" class="btn btn-danger btn-sm" href="{{route('posts.delete',$row->id)}}"><i class="fa fa-trash"></i></a>

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
