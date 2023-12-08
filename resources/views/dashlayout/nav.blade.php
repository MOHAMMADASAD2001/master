<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/homedash" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-none d-lg-block">MAD WATCH</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   

    <nav class="header-nav ms-auto" style="margin-left: auto; padding-right: 10px; display: flex; align-items: center;">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown" style="margin-right: 10px;">
        {{-- <img src={{ url('/images/'.Auth::user()->image) }} alt="Profile" class="rounded-circle" style="margin-right: 5px; width: 40px; height: 40px;"> --}}
        @if(session('loginname'))
              <span style="color: black; font-weight: bold;">{{ session('loginname') }}</span>
          @endif
      </a>
  
      <form action="{{ route('adminlogout') }}" method="POST" style="margin-right: 10px;">
          @csrf <!-- Include CSRF token -->
          <button type="submit" class="btn btn-primary">Log out</button>
      </form>
  
  </nav>
  
  
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="homedash">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="admindash">
          <i class="bi bi-people"></i>
          <span>Admins</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="userdash">
          <i class="bi bi-people"></i>
          <span>Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="categorydash">
          <i class="bi bi-people"></i>
          <span>Categories</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="productdash">
          <i class="bi bi-people"></i>
          <span>Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="cartdash">
          <i class="bi bi-people"></i>
          <span>Cart</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="orderdash">
          <i class="bi bi-people"></i>
          <span>Orders</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="reviewdash">
          <i class="bi bi-people"></i>
          <span>Reviews</span>
        </a>
      </li>

     

  </aside><!-- End Sidebar-->