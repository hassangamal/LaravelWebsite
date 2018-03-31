<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/website/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/website/css/flexslider.css" rel="stylesheet" />
    <link href="/website/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="/website/css/font-awesome.min.css">
    <script src="/website/js/jquery.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

    <title>
        LaravelApp |
        @yield('title')
    </title>
</head>
<body>

<div class="header">
    <div class="container"> <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-paper-plane"></i> ONE</a>
        <div class="menu"> <a class="toggleMenu" href="#"><img src="/website/images/nav_icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
                <li class="current"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="/website/about.html">About Us</a></li>
                <li><a href="/website/services.html">Services</a></li>
                <li><a href="/website/contact.html">Contact Us</a></li>
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
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
                <div class="clear"></div>
            </ul>
        </div>
    </div>
</div>







    @yield('content')
    @yield('footer')
<script type="text/javascript" src="/website/js/responsive-nav.js"></script>
    <script src="/website/js/bootstrap.min.js"></script>
    <script src="/website/js/jquery.flexslider.js"></script>
</body>
</html>
