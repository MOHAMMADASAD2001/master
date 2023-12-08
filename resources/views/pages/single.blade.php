@section('css', asset('css/single.css'))


@section('title', 'product')

@extends('layout.master')
@section('content')

    <!-- card start  -->

    <div class="container mt-5 pb-5">
        <div class="row">
            <div class="col-md-6 image_product">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>

            <div class="col-md-6">

                <h2 class="product-title" style="color: #3b4a6b;"><b>{{ $product->name }}</b></h2>
                {{-- <div class="product-rating">
                    <span class="rating-stars">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </span>
                    <span class="rating-text">(0)</span>
                </div> --}}
                <p class="product-description">Smartwatches seamlessly merge technology with daily life, offering
                    convenience,
                    connectivity, and a host of features right at your wrist.</p>
                <p class="product-price">{{ $product->price }}JOD</p>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" value="1" min="1">
                </div>
                <a href="cart.html">
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="product_name" value="{{ $product->name }}">
                        <input type="hidden" name="product_price" value="{{ $product->price }}">
                        <button type="submit" class="btn btn-primary add-to-cart-btn"
                            style="text-decoration: none !important; color: azure;">Add to Cart</button>
                    </form>
                </a>
                {{-- <button class="btn btn-primary add-to-cart-btn"><a href="cart.html"
            style="text-decoration: none !important; color: azure;">ADD TO CART</a></button> --}}
                <!-- <input type="submit" class="btn btn-primary add-to-cart-btn" value="ADD TO CART" > -->
            </div>
        </div>
    </div>

     <h1>Our Customers Reviews for {{ $product->name }}</h1>

        <div class="reviews">
            @foreach ($reviews as $review)
                <div class="comment">
                    <div class="user">

                        <a href="#"> <img src="{{ url('/images/' . $review->user->image) }}" alt="User Profile"
                                class="rounded-circle">
                        </a>
                        <div class="info">
                            <div class="name">{{ $review->user->name }}</div>
                            <div class="date">{{ $review->created_at->format('F d, Y') }}</div>
                        </div>
                    </div>
                    <div class="rating">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $review->rating)
                                ⭐️
                            @else
                                ☆
                            @endif
                        @endfor
                    </div>
                    <div class="text">{{ $review->comment }}</div>
                </div>
            @endforeach
        </div>
        <br><br><br>
        @auth
            <h1>Add Your Review</h1>
            <form action="{{ route('review.store') }}" method="POST" id="review-form">
                @csrf
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ auth()->user()->email }}" required><br>

                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="5">⭐️⭐️⭐️⭐️⭐️</option>
                    <option value="4">⭐️⭐️⭐️⭐️</option>
                    <option value="3">⭐️⭐️⭐️</option>
                    <option value="2">⭐️⭐️</option>
                    <option value="1">⭐️</option>
                </select><br>

                <label for="review">Your Review:</label><br>
                <textarea id="review" name="review" rows="4" required></textarea><br>

                <!-- Assuming you have a way to determine the product ID -->
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <!-- Use the product ID from the current page -->

                <button type="submit">Submit Review</button>
            </form>
        @endauth
  
    <!-- card end -->
@endsection
