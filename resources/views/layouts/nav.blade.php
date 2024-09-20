<nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="myNav">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul id="nav" class="navbar-nav mr-auto">
             <a  href="/">Home</a>
             <a  href="/home">Create CV</a>
             <!-- <a  href="/post">Post a Job</a> -->
             <a href="/jobListing">Jobs</a>
             <a href="/services">Services</a>
             <a href="/about">About</a>
             <a href="/contactUs">Contact Us</a>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link fa fa-sign-register" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link fa fa-sign-in" href="{{ route('login') }}">{{ __(' Login') }}</a>
                    </li>
                @else
                    <li class="dropdown notification-list">
                        <a class="nav-link  waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fa fa-user"></i> Profile
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fa fa-cog"></i> Settings
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fa fa-lock"></i> Lock screen
                            </a>

                            <!-- item-->
                            <a class="dropdown-item fa fa-sign-out" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                @endguest
            </ul>
        </div>
    </div>
</nav>
