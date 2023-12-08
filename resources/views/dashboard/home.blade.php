@extends('dashlayout.master')
@section('title','dashboard')
	@section('content')


    
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                
                </div>

                <div class="card-body">
                  <h5 class="card-title">USERS</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h3>{{ count($users ?? []) }}<sup style="font-size: 20px"></sup></h3>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  
                </div>

                <div class="card-body">
                  <h5 class="card-title">Categories</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h3>{{count($categories ?? []) }}<sup style="font-size: 20px"></sup></h3>

                    </div>
                  </div>
                </div>

              </div>
            </div>
            

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                 
                </div>

                <div class="card-body">
                  <h5 class="card-title">PRODUCTS </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-shop"></i>
                    </div>
                    <div class="ps-3">
                      <h3>{{count($products ?? []) }}<sup style="font-size: 20px"></sup></h3>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->





    @endsection