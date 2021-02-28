        @extends('backend.layouts.master')
        @section('content')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h4 class="m-0 text-dark">Web Settings</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Settings</li>
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
                                    <h5 class="m-0">Web Content
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-10">
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
                                                <form action="{{route('settings.update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <label>Website Name</label>
                                                    <input class="form-control mb-3" type="text" name="website_name" value="{{$content->website_name}}">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Facebook Link</label>
                                                            <input class="form-control mb-3" type="text" name="facebook_link" value="{{$content->facebook_link}}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Twitter Link</label>
                                                            <input class="form-control mb-3" type="text" name="twitter_link" placeholder="Enter link" value="{{$content->twitter_link}}">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Instagram Link</label>
                                                            <input class="form-control mb-3" type="text" name="instagram_link" placeholder="Enter link" value="{{$content->instagram_link}}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Youtube Link</label>
                                                            <input class="form-control mb-3" type="text" name="youtube_link" placeholder="Enter link" value="{{$content->youtube_link}}">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Email</label>
                                                            <input class="form-control mb-3" type="text" name="email" value="{{$content->email}}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Mobile</label>
                                                            <input class="form-control mb-3" type="text" name="mobile" value="{{$content->mobile}}">
                                                        </div>
                                                    </div>

                                                    <label>Address</label>
                                                    <textarea class=" mb-3 form-control" name="address">{{$content->address}}</textarea>

                                                    <label>Website Logo</label>
                                                    <input id="image" class="form-control mb-3" type="file" name="website_logo">
                                                    <img style="padding:4px;border:1px solid gray;" width="250" id="showImage" class="mt-2 img-fluid mb-3" src="{{asset($content->website_logo)}}" alt="Logo"><br>


                                                    <label>Website Description</label>
                                                    <textarea class=" mb-3 form-control" placeholder="Enter description" name="about_website">{{$content->about_website}}</textarea>

                                                    <label>Copyright Text</label>
                                                    <input class="form-control mb-3" type="text" name="copyright_text" value="{{$content->copyright_text}}">

                                                    <div class="row">
                                                        <div class="col">
                                                            <h4>About Us</h4>
                                                        </div>
                                                    </div>
                                                    <label>About Us Description</label>
                                                    <textarea class="textarea mb-3 form-control" name="about_us_text">{{$content->about_us_text}}</textarea>

                                                    <label>About Us Image</label>
                                                    <input id="image" class="form-control mb-3" type="file" name="about_us_image">
                                                    <img style="padding:4px;border:1px solid gray;" width="250" id="showImage" class="mt-2 img-fluid mb-3" src="{{asset($content->about_us_image)}}" alt="Logo"><br>

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
