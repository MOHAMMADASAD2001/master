@section('title', 'Category')
@section('css', asset('css/cat.css'))

@extends('layout.master')
@section('content')
    <!-- shop section -->
    <div class="page-heading products-heading header-text">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <div class="image-container">
                        <img src="{{ asset('images/back.jpg') }}" alt="">
                        <div class="text-overlay">
                            <h4>new arrivals</h4>
                            <h2>MAD products</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-12">
        <div class="filters">
            <div class="filter-group">
                <label>Category:</label>
                <select id="categoryFilter" onchange="filterByCategory(this.value)">
                    <option value="/">All Categories</option>
                    <option value="1">Rolex</option>
                    <option value="2">Smart Watch</option>
                    <option value="3">Casio</option>
                </select>
                <script>
                    function filterByCategory(categoryId) {
                        window.location.href = '/category/' + categoryId;
                    }
                </script>
            </div>
            <div class="filter-group">
                <form action="{{ route('filterProducts') }}" method="GET">
                    <select name="price_range" id="price_range">
                        <option value="">Price</option>
                        <option value="0-10">0 - 10</option>
                        <option value="10-20">10 - 20</option>
                        <option value="20-30">20 - 30</option>
                        <option value="30-40">30 - 40</option>
                        <option value="40-50">40 - 50</option>
                    </select>
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="filter-group">
                
                <form action="{{ route('search') }}" method="GET">
                    <div class="input-group">
                        <input name="name1" class="form-control" type="text" placeholder="Search" />
                        <button type="submit" name="submit" class="btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <section class="shop_section layout_padding">
        <div class="container">

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
