@extends('layout.master')
@section('title', 'Home')
@section('css', 'css/cat.css')




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
                                        Time is a precious gift, and a well-crafted watch is the vessel that allows us to
                                        cherish it, one elegant moment at a time.

                                    </p>
                                    <div class="btn-box">
                                        <a href="/contact" class="btn1">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                                        "Like a faithful companion, a watch marks the passage of time, preserving moments as
                                        they become memories."





                                    </p>
                                    <div class="btn-box">
                                        <a href="/about" class="btn1">
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
                                        "A watch not only tells time but narrates stories of our past, anchors the present,
                                        and shapes the future moments we cherish."





                                    </p>
                                    <div class="btn-box">
                                        <a href="/category" class="btn1">
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
    <div class="container pb-5 mt-5 " style="border-bottom: 1px solid #bc9864">
        <div class="row">
            @foreach ($category as $item)
                <div class="col-md-4 col-sm-6 mb-4"> <!-- On tablets, it will occupy half of the width -->
                    <a href="{{ route('category', $item->id) }}" class="text-decoration-none">
                        <div class="card card-cat mb-4">
                            <div class="d-flex  align-items-center justify-content-center">

                                <img src="{{ $item->image }}" class="card-img-top w-50 " alt="Category Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel" data-interval="20000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-caption d-flex h-100 align-items-center justify-content-center">
                <div>
                    <h1>MAD</h1>
                    <p>Enjoy shopping in the store</p>
                    <a href="category" style="color: #bc9864">Shop now</a>
                </div>
            </div>

            <div class="carousel-item active">
                <video controls="true" autoplay="autoplay" loop muted class="d-block w-100 " src="images/video.mp4"
                    alt="Video Slide"></video>

            </div>

            <div class="carousel-item">
                <video controls="true" autoplay="autoplay" loop muted class="d-block w-100" src="images/video.mp4"
                    alt="Video Slide"></video>
            </div>

            <div class="carousel-item">
                <video controls="true" autoplay="autoplay" loop muted class="d-block w-100" src="images/video.mp4"
                    alt="Video Slide"></video>
            </div>

            <div class="carousel-item">
                <video controls="true" autoplay="autoplay" loop muted class="d-block w-100" src="images/video.mp4"
                    alt="Video Slide"></video>
            </div>




        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- <iframe id="youtube-video" width="560" height="315" src="https://www.youtube.com/embed/YGQBm9Mnad8?autoplay=1&mute=1" frameborder="0" allowfullscreen allow="autoplay" autoplay="autoplay"></iframe> --}}

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
                     NEW WATCHES
                    
                </h2>
            </div>
            <div class="row">
                @foreach ($product as $item)
                    <div class="col-md-6 col-xl-3">
                        <div class="product d-flex flex-column">
                            <a href="{{ route('product.show', ['id' => $item->id]) }}" class="img-prod">
                                <img class="img-fluid" src="{{ asset($item->image) }}" alt="product">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3">
                                <div class="d-flex">
                                    <div class="cat">
                                        <span>{{ $item->name }}</span>
                                    </div>
                                </div>
                                <h3><a href="{{ route('product.show', ['id' => $item->id]) }}">{{ $item->description }}</a>
                                </h3>
                                <div class="pricing">
                                    <p class="price"><span>{{ $item->price }}JOD</span></p>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                        <input type="hidden" name="product_name" value="{{ $item->name }}">
                                        <input type="hidden" name="product_price" value="{{ $item->price }}">
                                        <button type="submit" class=" sub-add" style="">Add to Cart</button>
                                    </form>
                                    {{-- <a href="#" class="add-to-cart text-center py-2 mr-1">
                                    <span>Add to cart <i class="ion-ios-add ml-1"></i></span>
                                </a> --}}
                                </div>
                            </div>
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
    {{-- <section class="client_section layout_padding">
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
  </section> --}}
    <!-- end client section -->

@endsection
