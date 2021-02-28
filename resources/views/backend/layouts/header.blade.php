 <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block mt-1">
                    <a target="_blank" href="{{url('/')}}" class=" btn btn-primary btn-sm text-light"><i class="fa fa-eye"></i> View Website</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                       <div class="user-img float-left">
                            <img style="height: 30px; width: 30px;border-radius: 50%;margin-right:5px;" src="{{(!empty(Auth::user()->image))?url(Auth::user()->image):url('public/uploaded/user_default/avatar.jpg')}}" alt="Image">
                        </div>
                        <span>{{ Auth::user()->usertype }} <i class="fa fa-angle-down ml-1"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="{{route('profiles.view')}}" class="dropdown-item">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('profiles.edit.password')}}" class="dropdown-item">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->