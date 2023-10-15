@section('title', 'Category')

@extends('layout.master')
@section('content')
 <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <!-- <div class="heading_container heading_center">
        <h2>
          Latest Watches
        </h2>
      </div> -->
      {{-- <div class="row">
        <div class="col-md-6 col-xl-3">
          <div class="box">
            <a href="single.html">
              <div class="img-box">
                <img src="images/w1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $300
                  </span>
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
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $125
                  </span>
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
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $110
                  </span>
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
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $145
                  </span>
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
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w5.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $195
                  </span>
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
        <div class="col-sm-6  col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $170
                  </span>
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
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/w1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Smartwatch
                </h6>
                <h6>
                  Price:
                  <span>
                    $230
                  </span>
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
      </div> --}}
      <div class="row">
        @foreach ($product as $item)
        <div class="col-md-6 col-xl-3">
          <div class="box">
            <a href="{{ url('/single/{id}') }}">
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
        {{-- <a href="">
          View All
        </a> --}}
          <ul class="pages">
                          @if ($product->onFirstPage())
                              <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                          @else
                              <li><a href="{{ $product->previousPageUrl() }}"><i class="fa fa-angle-double-left"></i></a></li>
                          @endif

                          @for ($i = 1; $i <= $product->lastPage(); $i++)
                              @if ($i == $product->currentPage())
                                  <li class="active"><a href="#">{{ $i }}</a></li>
                              @else
                                  <li><a href="{{ $product->url($i) }}">{{ $i }}</a></li>
                              @endif
                          @endfor

                          @if ($product->hasMorePages())
                              <li><a href="{{ $product->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a></li>
                          @endif
                      </ul>
                  </div>
      </div>
    </div>
  </section>
<div class="col-md-12">
                      {{-- <ul class="pages">
                          @if ($product->onFirstPage())
                              <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                          @else
                              <li><a href="{{ $product->previousPageUrl() }}"><i class="fa fa-angle-double-left"></i></a></li>
                          @endif

                          @for ($i = 1; $i <= $product->lastPage(); $i++)
                              @if ($i == $product->currentPage())
                                  <li class="active"><a href="#">{{ $i }}</a></li>
                              @else
                                  <li><a href="{{ $product->url($i) }}">{{ $i }}</a></li>
                              @endif
                          @endfor

                          @if ($product->hasMorePages())
                              <li><a href="{{ $product->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a></li>
                          @endif
                      </ul>
                  </div> --}}
  <!-- end shop section -->

@endsection