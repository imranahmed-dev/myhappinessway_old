@extends('frontend.dashboard.dashboard-master')
@section('dashboard')
<div class="col-md-9">
    <div class="customer-dashboard-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fa fa-list"></i> Post List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">Serial</th>
                                        <th width="10%">Title</th>
                                        <th width="10%">Image</th>
                                        <th width="10%">Category</th>
                                        <th width="10%">Tags</th>
                                        <th width="20%">Description</th>
                                        <th width="7%">Status</th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$post->title}}</td>
                                        <td><img width="100" src="{{{asset($post->image)}}}" alt=""></td>
                                        <td>{{$post->category->name}}</td>
                                        <td>@foreach($post->tags as $tags)
                                            <span class="badge badge-primary">{{$tags->name}}</span>
                                            @endforeach</td>
                                        <td>{{$post->description}}</td>
                                        <td>
                                            @if($post->status == 1)
                                            <button class="btn btn-danger btn-sm">Pending</button>
                                            @elseif($post->status == 2)
                                            <button class="btn btn-success btn-sm">Aproved</button>
                                            @endif
                                        </td>
                                        <td>
                                           <a href="{{route('post.show',$post->slug)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye"> View</i></a>
                                           
                                            <a href="{{route('post.edit',$post->slug)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"> Edit</i></a>

                                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"> Delete</i></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
