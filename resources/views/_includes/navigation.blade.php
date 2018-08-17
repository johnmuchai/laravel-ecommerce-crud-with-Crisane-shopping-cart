 <nav class="navbar navbar-expand-md navbar-dark bg-primary navbar-laravel" style="position:sticky; top: 0;
    z-index: 1071;background-color:#3c8dbc;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h3><span style="background-color:white; color:#3c8dbc; padding: 1px 1px 1px 1px;">Kopa</span>Nduthi</h3>
                </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    <h3><a class="nav-link" href="{{ url('/home') }}" style="color:white; margin-left:10px;font-size:0.7em;" ><i class="fa fa-home" style="margin-right:10px;"></i>Shop</a></h3>
                    </li>
                    <li class="nav-item">
                    <h3><a class="nav-link" href="{{ url('/home') }}" style="color:white;margin-left:10px;border-left:1px solid #fff;font-size:0.7em;">About Us</a></h3>
                    </li>
                    <li class="nav-item">
                    <h3><a class="nav-link" href="{{ url('/home') }}" style="color:white;margin-left:10px;border-left:1px solid #fff;font-size:0.7em;">Services</a></h3>
                    </li>

                    <li class="nav-item">
                    <h3><a class="nav-link" href="{{ url('/home') }}" style="color:white;margin-left:10px; border-left:1px solid #fff;font-size:0.7em;">Team</a></h3>
                    </li>

                    <li class="nav-item">
                    <h3><a class="nav-link" href="{{ url('/home') }}" style="color:white;margin-left:10px; border-left:1px solid #fff;font-size:0.7em;">Contact Us</a></h3>
                    </li>

                    </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret-down"></span>
                                    </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    
                                                <a class="dropdown-item" href="#"><i class="fa fa-user" style="margin-right:10px;"></i>Profile</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-bell" style="margin-right:10px;"></i>Notification</a>
                                                <a class="dropdown-item" href="{{route('manage.dashboard')}}"><i class="fa fa-cogs" style="margin-right:10px;"></i>Manage</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" style="margin-right:10px;"></i>
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
                <li class="nav-item" style="list-style-type:none;">
                <h3><a class="nav-link" href="{{ route('cart.index') }}" style="color:white;margin-left:10px; border-left:1px solid #fff;font-size:0.8em;">Cart 
                    <span style="background-color:yellow;color:black;padding:2px 2px 2px 2px; border-radius:1px;font-size:0.5em;">
                        
                        {{ Cart::instance('default')->count()}}
                    
                    </span>
                        </a>
                            </h3>
                    </li>
            </div>
        </nav>
