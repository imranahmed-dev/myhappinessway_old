<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Happiness Way</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/frontend/font-awesome-4.7.0/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/jquery-ui.css">
   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/toastr_js/toastr.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/style.css">
    <style>
        .dashboard-user img {
            cursor: pointer;
            width: 37px;
            border-radius: 50%;
            height: 37px;
        }

        .profile-drop {
            width: 250px;
        }

        .profile-drop a {
            color: #000;
            display: block !important;
            padding: 5px 7px;
            font-size: 15px;
            transition: .3s;
        }

        .profile-drop a:hover {
            background: #f1f1f1;
        }

        .category-img {
            height: 160px;
            width: 100%;
        }

        .section-header {
        background: url({{asset('public/frontend/images/section-header.png')}});
        background-repeat: no-repeat;
        background-size: cover;
        padding: 30px 0;
        color: #fff;
        }

    </style>
</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar" role="banner">
            <div class="container-fluid">
                <div class="row align-items-center" style="border-bottom:1px solid #ddd;">

                    <div class="col-12 search-form-wrap js-search-form">
                        <form method="get" action="#">
                            <input type="text" id="s" class="form-control" placeholder="Search...">
                            <button class="search-btn" type="submit"><span class="icon-search"></span></button>
                        </form>
                    </div>

                    <div class="col-4 site-logo">
                        <a href="{{url('/')}}" class="text-black h2 mb-0">
                            <img src="{{ asset($settings->website_logo) }}" alt="" width="100">
                        </a>
                    </div>

                    <div class="col-8 text-right">
                        <nav class="site-navigation" role="navigation">
                            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
                                <li><a href="{{route('about')}}">আমাদের সম্পর্কে</a></li>
                                <li><a href="{{route('contact')}}">যোগাযোগ</a></li>
                                <li><a href="#">গোপনীয়তা</a></li>
                                <li><a href="{{route('registration.view')}}">রেজিস্ট্রেশন</a></li>

                                @if(@Auth::user()->usertype == "User")
                                @if(@Auth::user()->id != Null)
                                <li class="dropdown dashboard-user"><span data-toggle="dropdown" style="cursor:pointer;"><img src="@if(Auth::user()->image){{asset(Auth::user()->image)}}@else{{asset('public/frontend/userimage/profile.png')}}@endif" alt="">
                                   <span style="cursor:pointer;padding-left:2px; font-weight:bold;">{{Auth::user()->name}}
                                    <i class="fa fa-angle-down"></i></span></span>
                                    <div class="dropdown-menu dropdown-menu-right px-2 mt-3 profile-drop">
                                        <a href="{{route('dashboard.view')}}"><i class="fa fa-tachometer"></i> ড্যাশবোর্ড</a>
                                        
                                        <a href="{{route('profile.view')}}"><i class="fa fa-user"></i> প্রোফাইল</a>
                                        
                                        <a href="{{route('write.post')}}"><i class=" fa fa-pencil"></i> পোস্ট লিখুন</a>
                                        
                                        <a href="{{route('write.post')}}"><i class=" fa fa-list"></i> সমস্ত পোস্ট</a>
                                        
                    
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-sign-out"></i> লগআউট</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endif
                                @else
                                <li><a href="{{route('login.view')}}">লগইন</a></li>
                                @endif
                                
                                
                            </ul>
                        </nav>
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a>
                    </div>
                </div>

            </div>
        </header>

        @yield('content')


        <div class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3 class="footer-heading mb-4">আমাদের সম্পর্কে</h3>
                        <p>{{$settings->about_website}}</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <h3 class="footer-heading mb-4">মেনু আইটেম</h3>
                        <ul class="list-unstyled float-left mr-5">
                            <li><a href="#">আমাদের সম্পর্কে</a></li>
                            <li><a href="#">লগইন</a></li>
                            <li><a href="#">রেজিস্ট্রেশন</a></li>
                            <li><a href="#">Subscribes</a></li>
                        </ul>
                         
                         <ul class="list-unstyled float-left">
                            @foreach($categoriess as $category)
                            <li><a href="{{route('frontend.category', ['slug' => $category->slug])}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-4">


                        <div>
                            <h3 class="footer-heading mb-4">সোশ্যাল মিডিয়া</h3>
                            <p>
                                @if($settings->facebook_link)<a target="_blank" href="{{$settings->facebook_link}}"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>@endif

                                @if($settings->twitter_link)<a target="_blank" href="{{$settings->twitter_link}}"><span class="icon-twitter p-2"></span></a>@endif

                                @if($settings->instagram_link)<a target="_blank" href="{{$settings->instagram_link}}"><span class="icon-instagram p-2"></span></a>@endif

                                @if($settings->youtube_link)<a target="_blank" href="{{$settings->youtube_link}}"><span class="icon-youtube p-2"></span></a>@endif
                            </p>
                            <p><i class="fa fa-envelope"> {{$settings->email}}</i></p>
                            <p><i class="fa fa-phone"> {{$settings->mobile}}</i></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            Copyright &copy; <script>
                                document.write(new Date().getFullYear());

                            </script>
                            {{$settings->copyright_text}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset('public/frontend')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/jquery-ui.js"></script>
    <script src="{{asset('public/frontend')}}/js/popper.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/jquery.stellar.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/jquery.countdown.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/jquery.magnific-popup.min.js"></script>
 <!-- include summernote css/js -->

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="{{asset('public/frontend')}}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('public/frontend')}}/js/aos.js"></script>

    <script src="{{asset('public/frontend')}}/js/main.js"></script>
    <script src="{{asset('public/frontend')}}/toastr_js/toastr.min.js"></script>


    <script>
        @if(Session::has('message'))
        var type = "{{Session::get('alert-type','info')}}"

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

    </script>

    <script>
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                    )
                }
            })
        });

    </script>
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>


</body>

</html>
