<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    {{-- CSRF Token for Ajax request --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <title>@yield('title')</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="@yield('css')" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

</head>

<body>

    <!-- <div class="hero_area">
    <div class="hero_social">
      <a href="">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
    </div> -->
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">


                <a class="navbar-brand" href="/">

                    <img src="{{ asset('images/logo.png') }}" alt="">

                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
// Get the current URL
$currentURL = $_SERVER['REQUEST_URI'];
?>

<ul class="navbar-nav">
    <li class="nav-item <?php echo ($currentURL == '/') ? 'active' : ''; ?>">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item <?php echo (strpos($currentURL, 'category') !== false) ? 'active' : ''; ?>">
        <a class="nav-link" href="{{ url('category') }}"> Watches </a>
    </li>
    <li class="nav-item <?php echo (strpos($currentURL, 'about') !== false) ? 'active' : ''; ?>">
        <a class="nav-link" href="{{ url('about') }}"> About </a>
    </li>
    <li class="nav-item <?php echo (strpos($currentURL, 'contact') !== false) ? 'active' : ''; ?>">
        <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
    </li>
</ul>

                    <div class="user_option-box">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ url('/images/' . Auth::user()->image) }}" alt="Profile"
                                        class="rounded-circle" style="margin-right: 5px; width: 40px; height: 40px;">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    <form method="POST" action="{{ route('logout') }}" class="px-4 py-2">
                                        @csrf
                                        <button type="submit" class="btn btn-link">Logout</button>
                                    </form>
                                    <a class="dropdown-item" href="profile">Profile</a>
                                </div>
                            </li>
                        @endauth
                        @guest
                            @if (Auth::user())
                                                            <a href="{{ url('register') }}">
                                <i class="fa-solid fa-user fa-2xl" style="color: #bc9864; padding: 20px;"></i>
                            </a>
                            @else
                            <a href="/register">Login</a>
                            @endif
                        @endguest
                            <a href="{{ route('cart.view') }}" class="nav-link">
                                <i class="fa-solid fa-cart-plus fa-2xl" style="color: #bc9864; padding: 20px;"></i>
                                @if (\App\CartService::getItemCount() > 0)
                                    <span class="badge badge-pill badge-primary"
                                        style="margin-left: -30px; margin-bottom: 5px;">{{ \App\CartService::getItemCount() }}</span>
                                @endif
                            </a>
                        <!-- <a href="">
                <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: #bc9864; padding: 20px;"></i>
              </a> -->
                    </div>
                </div>
            </nav>
        </div>
    </header>
