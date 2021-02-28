@extends('frontend.dashboard.dashboard-master')
@section('dashboard')
<div class="col-md-9">
    <div class="customer-dashboard-body">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="fa fa-info-circle"></i> Post Details
                        <a class="float-right btn btn-primary btn-sm" href="{{route('post.list')}}"><i class="fa fa-list"> Post list</i></a>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width:20%;">Post Title</th>
                                    <td style="width:80%;">{{$post->title}}</td>
                                </tr>
                                <tr>
                                    <th style="width:20%;">Post Category</th>
                                    <td style="width:80%;">{{$post->category->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width:20%;">Post Image</th>
                                    <td style="width:80%;"><img width="200" src="{{asset($post->image)}}" alt=""></td>
                                </tr>
                                <tr>
                                    <th style="width:20%;">Post Tags</th>
                                    <td style="width:80%;">@foreach($post->tags as $tags)
                                        <span class="badge badge-primary">{{$tags->name}}</span>
                                        @endforeach</td>
                                </tr>
                                <tr>
                                    <th style="width:20%;">Post Description</th>
                                    <td style="width:80%;">{{$post->description}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
