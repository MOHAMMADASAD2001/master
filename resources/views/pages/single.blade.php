@section('css', asset('css/single.css'))


@section('title','product')

@extends('layout.master')
@section('content')

<!-- card start  -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 image_product">
        <img src="{{asset('images/w1.png')}}" alt="Product Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2 class="product-title" style="color: #3b4a6b;"><b>Smart Watch</b></h2>
        <div class="product-rating">
          <span class="rating-stars">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </span>
          <span class="rating-text">(0)</span>
        </div>
        <p class="product-description">Smartwatches seamlessly merge technology with daily life, offering convenience,
          connectivity, and a host of features right at your wrist.</p>
        <p class="product-price">$19.99</p>
        <div class="form-group">
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1" min="1">
        </div>
        <button class="btn btn-primary add-to-cart-btn"><a href="cart.html"
            style="text-decoration: none !important; color: azure;">ADD TO CART</a></button>
        <!-- <input type="submit" class="btn btn-primary add-to-cart-btn" value="ADD TO CART" > -->
      </div>
    </div>
  </div>
  <!-- card end -->
  @endsection