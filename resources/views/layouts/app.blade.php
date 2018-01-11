<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!--Favicon-->
    <link rel="shortcut icon" href="{{{ asset('images/favicon.png') }}}">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/myApp.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!--<header class="grey-blue">-->
        <!--<nav class="navbar navbar-fixed-top grey-blue">
            <div class="container">
                <div class="navbar-header">

                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                
                    <a class="logo" href="{{ url('/') }}">
                        <img src="/images/Logo.png" />
                    </a>
                </div>
                <div class="collapse navbar-collapse pull-right" id="app-navbar-collapse">
                    
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        
                        <ul class="nav nav-pills navbar-right">
                            
                            @guest
                                <li class="{{ (\Request::route()->getName() == 'about') ? 'active' : ''}}"><a class="text-white caps" href="{{ route('about') }}">About &amp; Contact Us</a></li>
                                <li class="{{ (\Request::route()->getName() == 'login') ? 'active' : ''}}"><a class="text-white caps" href="{{ route('login') }}">Login</a></li>
                                <li class="{{ (\Request::route()->getName() == 'register') ? 'active' : ''}}"><a class="text-white caps" href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <router-link tag="li" to="/profile">
                                            <a>
                                                <span class="fa fa-user fa-fw"></span>
                                                Profile
                                            </a>
                                        </router-link>    
                                        <li>
                                            <a href="{{ route('my-logout') }}">
                                                <span class="fa fa-sign-out fa-fw"></span>
                                                Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            @endguest
                        </ul>
                </div>
            </div>
        </nav>-->
        <div id="mainnav" class="navbar navbar-inverse navbar-fixed-top grey-blue" role="navigation">
            <div class="container">
                <div class="navbar-header aligncenter" style="padding: 0 20px" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="{{ url('/') }}" class="navbar-brand">
                        <b class="text-blue">M</b>
                        <b class="text-green">H</b>
                        <b class="text-orange">M</b>
                        <b class="text-yellow">I</b>
                        <b class="text-red">T</b> 
                    </a>                                    
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li class="{{ (\Request::route()->getName() == 'about') ? 'active' : ''}}"><a class="text-white caps" href="{{ route('about') }}">About &amp; Contact Us</a></li>
                            <li class="{{ (\Request::route()->getName() == 'login') ? 'active' : ''}}"><a class="text-white caps" href="{{ route('login') }}">Login</a></li>
                            <li class="{{ (\Request::route()->getName() == 'register') ? 'active' : ''}}"><a class="text-white caps" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <router-link tag="li" to="/profile">
                                        <a>
                                            <span class="fa fa-user fa-fw"></span>
                                            Profile
                                        </a>
                                    </router-link>    
                                    <li>
                                        <a href="{{ route('my-logout') }}">
                                            <span class="fa fa-sign-out fa-fw"></span>
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>                    
                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </div>


        @yield('content')
        <footer class="center text-grey-blue orange">
            <div class="container">
                <p>Copyright &copy; MustDo 2017. All Rights Reserved.</p>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
