        @extends('backend.layouts.master')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Manage user Post</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('user.posts.view')}}">Post List</a></li>
                                <li class="breadcrumb-item active">Show Post</li>
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
                                    <h5 class="m-0">Show Post
                                        <a class="btn btn-primary btn-sm float-right" href="{{route('user.posts.view')}}"><i class="fa fa-list"></i> Go back to post list</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                       <div class="col">
                                           <table class="table table-bordered">
                                               <tr>
                                                   <th>Image</th>
                                                   <td><img width="150" src="{{url($post->image)}}" alt="Image"></td>
                                               </tr>
                                               <tr>
                                                   <th>Title</th>
                                                   <td>{{$post->title}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Category</th>
                                                   <td>{{$post->category->name}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Tags</th>
                                                   <td>
                                                       @foreach($post->tags as $tag)
                                                       <span class="badge badge-primary">{{$tag->name}}</span>
                                                       @endforeach
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <th>Author</th>
                                                   <td>{{$post->user->name}}</td>
                                               </tr>
                                               <tr>
                                                   <th>Description</th>
                                                   <td>{!!$post->description!!}</td>
                                               </tr>
                                           </table>
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
