        @extends('backend.layouts.master')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Manage Category</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('categories.view')}}">Category List</a></li>
                                <li class="breadcrumb-item active">Add Category</li>
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
                                    <h5 class="m-0">Add Category
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('categories.view')}}"><i class="fa fa-list"></i> Go back to category list</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            <div class="card card-body">
                                                <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <label>Category Name</label>
                                                    <input class="form-control mb-3" type="text" name="name" placeholder="Enter name">

                                                    <label>Description</label>
                                                    <textarea class="form-control mb-3" placeholder="Enter description" name="description"></textarea>

                                                    <label>Category Image</label>
                                                    <input id="image" class="form-control mb-3" type="file" name="category_image">
                                                    <img style="padding:4px;border:1px solid gray;" width="250" id="showImage" class="mt-2 img-fluid mb-3" src="{{url('public/uploaded/user_default/no-image-icon.png')}}" alt="User profile picture"><br>

                                                    <input class="btn btn-primary" type="submit" value="Submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
        @endsection
