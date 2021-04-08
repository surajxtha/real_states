<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Webartinfo">
    <meta name="author" content="Webartinfo">
    <title>Manland - Bootstrap Light Real Estate HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('lander_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css" integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA==" crossorigin="anonymous" />

    <link href="{{asset('lander_assets/libs/dropify/css/dropify.min.css')}}" type="text/css" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="{{asset('lander_assets/vendor/select2/css/select2-bootstrap.css')}}" />
    <link href="{{asset('lander_assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('lander_assets/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom styles for this template -->
    <link href="{{asset('lander_assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-success logo" href="{{asset('index.html')}}">
                <img class="img-fluid" src="{{asset('lander_assets/img/logo.svg')}}" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">
                            Home
                        </a>
                    </li>
                    <!-- Property -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.properties.index')}}">
                            Property
                        </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.properties.index')}}">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.properties.index')}}">
                            Contact Us
                        </a>
                    </li>

                    @if(auth()->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                {{auth()->user()->name}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                                <a class="dropdown-item" href="user-profile.html">User Profile</a>
                                <a class="dropdown-item" href="my-properties.html">My Properties</a>
                                <a class="dropdown-item" href="favorite-properties.html">Favorite Properties</a>
                                <a class="dropdown-item" href="{{route('site.properties.create')}}">Add Property</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                            </div>
                        </li>
                    @endif

                </ul>

                @if(!auth()->check())
                    <div class="my-2 my-lg-0">
                        <ul class="list-inline main-nav-right">
                            <li class="list-inline-item">
                                <a class="btn btn-link btn-sm" href="{{route('login')}}">Sign In</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-success btn-sm" href="{{route('register')}}">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="my-2 my-lg-0 ml-3">
                        <ul class="list-inline main-nav-right">
                            <li class="list-inline-item">
                                <a class="btn btn-success btn-sm" href="{{route('site.properties.create')}}">Add Property</a>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </nav>
</header>
<!-- End Navbar -->
