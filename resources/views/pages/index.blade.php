
@extends('layout.master')
@section('title','Home')




@section('content')

 <!-- slider section -->
  <section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h1>
                    Smart Watches
                  </h1>
                  <p>
                    Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit
                    amet, lobortis semper quam.
                  </p>
                  <div class="btn-box">
                    <a href="contact.html" class="btn1">
                      Contact Us
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6" >  
                <div class="img-box">
                  <img src="images/apple-watch.png" alt="" style="width: 81%;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container-fluid ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h1>
                    Watches
                  </h1>
                  <p>
                    Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit
                    amet, lobortis semper quam.
                  </p>
                  <div class="btn-box">
                    <a href="about.html" class="btn1">
                      ABOUT US
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <!-- <img src="images/ss.png" alt="" style="width: 47.5%; margin-left: 200px;"> -->
                  <img src="images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container-fluid ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h1>
                    Smart Watches
                  </h1>
                  <p>
                    Aenean scelerisque felis ut orci condimentum laoreet. Integer nisi nisl, convallis et augue sit
                    amet, lobortis semper quam.
                  </p>
                  <div class="btn-box">
                    <a href="watches.html" class="btn1">
                      MORE
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="images/slider-img.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#customCarousel1" data-slide-to="1"></li>
        <li data-target="#customCarousel1" data-slide-to="2"></li>
      </ol>
    </div>

  </section>
  <!-- end slider section -->
  </div>


  <!-- categories start -->
  <br><br>
  <div class="row">
  @foreach ($category as $item)
    <div class="col-md-4">
      <a href="{{ url('category', $item->id) }}">
        <div class="card-cat">
          <img src="{{ $item->image }}" class="card-img-top" alt="Category Image">
          <div class="card-body">
            <h5 class="card-title">{{ $item->name }}</h5>
            <p class="card-text">{{ $item->description }}</p>
          </div>
        </div>
      </a>
    </div>
  @endforeach
</div>

  {{-- @foreach ($category as $item)
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 ">
                            <div class="custom-block-wrap categorycard">
                                <img src="{{ $item->image }}" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">{{ $item->name }}</h5>

                                        <p class="description">{{ $item->description }}</p>


                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    @endforeach --}}
  <!-- categories  enc -->
  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          BEST SELLER
        </h2>
      </div>
      <div class="row">
        @foreach ($product as $item)
        <div class="col-md-6 col-xl-3">
          <div class="box">
            <a href="single.html">
              <div class="img-box">
                <img src="{{ $item->image }}" alt="hh">
              </div>
              <div class="detail-box">
                <h6>
                  {{ $item->name }}
                </h6>
                <h6>
                  Price:
                  <span>
                    {{ $item->price }}
                  </span>
                </h6>
                <h6>
                  {{ $item->description }}
                </h6>
              </div>
              <div class="new">
                <span>
                  <i class="fa-solid fa-cart-shopping fa-lg" style="color: #ffffff;"></i>
                </span>
              </div>
            </a>
          </div>
        </div>
        @endforeach
      </div>
      <div class="btn-box">
        <a href="/category">
          View All
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->
  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Reviews
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c1.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Mark Thomas
                    </h5>
                    <h6>
                      Customer
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum
                  dolore eu fugia
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/c2.jpg" alt="">
              </div>
              <div class="detail-box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Alina Hans
                    </h5>
                    <h6>
                      Customer
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore
                  et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum
                  dolore eu fugia
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  @endsection