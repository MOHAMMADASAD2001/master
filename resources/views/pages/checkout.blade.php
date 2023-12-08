@section('css', 'css/checkout.css')

@section('title', 'checkout')

@extends('layout.master')
@section('content')

    <!-- start card -->
    <div class=" container-fluid my-5 ">
        <div class="row justify-content-center ">
            <div class="col-xl-10">
                <div class="card shadow-lg ">

                    <div class="row  mx-auto justify-content-center text-center">
                        <div class="col-12 mt-3 ">
                            <nav aria-label="breadcrumb" class="second ">
                                <ol class="breadcrumb indigo lighten-6 first  ">
                                    <li class="breadcrumb-item font-weight-bold "><a class="black-text text-uppercase "
                                            href="/"><span class="mr-md-3 mr-1">BACK TO SHOP</span></a><i
                                            class="fa fa-angle-double-right " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase"
                                            href="/cart"><span class="mr-md-3 mr-1">SHOPPING BAG</span></a><i
                                            class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                                    <li class="breadcrumb-item font-weight-bold"><a
                                            class="black-text text-uppercase active-2" href="/checkout"><span
                                                class="mr-md-3 mr-1">CHECKOUT</span></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <div class="card border-0">
                                <div class="card-header pb-0">
                                    <h2 class="card-title space ">Checkout</h2>
                                    <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p>
                                    <hr class="my-0">
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('buyProduct') }}" id="paymentForm" method="post">
                                        @csrf
                                        <input type="hidden" name="totalPrice" value="{{ $total }}">
                                        <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="orderDate" value="{{ now() }}">
                                        <!-- Current date and time -->
                                        <div class="row mt-4">
                                            <div class="col">
                                                <p class="text-muted mb-2">DETAILS</p>
                                                <hr class="mt-0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NAME" class="small text-muted mb-1">YOUR NAME</label>
                                            <input type="text" class="form-control form-control-sm" name="NAME"
                                                id="name" value="{{ auth()->user()->name }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="small text-muted mb-1">EMAIL</label>
                                            <input type="text" class="form-control form-control-sm" name="email"
                                                id="email" value="{{ auth()->user()->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="small text-muted mb-1">PHONE</label>
                                            <input type="number" class="form-control form-control-sm" name="phone"
                                                id="phone">
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="small text-muted mb-1">ADDRESS</label>
                                            <input type="text" class="form-control form-control-sm" name="address"
                                                id="address" required>
                                        </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="card border-0 ">
                                <div class="card-header card-2">
                                    <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER</p>
                                    <hr class="my-2">
                                </div>


                                @php
                                    $subtotal = 0;
                                @endphp
                                @foreach ($cartItems as $cartItem)
                                    <!-- Your existing code for displaying cart items -->
                                    {{-- <tr>
                                       
                                        
                                        
                                        
                                        
                                    </tr> --}}
                                    @php
                                        $subtotal += $cartItem->product->price * $cartItem->quantity;
                                    @endphp

                                    <div class=" pt-0">
                                        <div class="row  justify-content-between m-1">
                                            <div class="col-auto col-md-7">
                                                <div class="media flex-column flex-sm-row">
                                                    <img class=" img-fluid" src="{{ asset($cartItem->product->image) }}"
                                                        width="50px">
                                                    <div class="media-body  my-auto">
                                                        <div class="row ">
                                                            <div class="col-auto">
                                                                <p class="mb-0"><b>{{ $cartItem->product->name }}</b></p>
                                                                <small
                                                                    class="text-muted">{{ $cartItem->product->name }}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" pl-0 flex-sm-col col-auto  my-auto">
                                                <p class="boxed-1">{{ $cartItem->quantity }}</p>
                                            </div>
                                            <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                                                <p><b>{{ $cartItem->product->price * $cartItem->quantity }} JD</b></p>
                                            </div>
                                        </div>
                                        <hr class="my-2">
                                @endforeach
                                @php
                                    $shippingCost = $subtotal > 50 ? 0 : 3;
                                    $total = $subtotal + $shippingCost;
                                @endphp

                                <div class="row ">
                                    <div class="col m-2">
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="mb-1"><b>Subtotal</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>{{ $subtotal }} JD
                                                    </b></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col">
                                                <p class="mb-1"><b>Shipping</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>{{ $shippingCost }} JD
                                                    </b></p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p><b>Total</b></p>
                                            </div>
                                            <div class="flex-sm-col col-auto">
                                                <p class="mb-1"><b>{{ $total }} JD
                                                    </b></p>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                    </div>
                                </div>
                                <div class="row  col-12 mb-5 mt-4 justify-content-between mx-auto ">
                                    {{-- <div class="col-md-7 col-lg-6 mx-auto"><button type="button"
                                            class="btn btn-block btn-outline-primary btn-lg">CHECKOUT</button></div> --}}
                                    @if (session('success') && session('showConfirmation'))
                                        <div id="confirmationBox">
                                            <div class="checkmark">&#10004;</div>
                                            <p>{{ session('success') }}</p>
                                            <a href="{{ url('/home') }}" class="homeButton">Back to Home</a>
                                        </div>
                                    @endif

                                    <!-- Rest of your checkout page content -->
                                    <div>
                                        <input type="radio" name="dbt" value="cd" id=""> Cash on
                                        Delivery
                                    </div> <br> <br>
                                    <div>
                                        <input type="radio" name="dbt" value="paypal"> Paypal
                                        <span>
                                            <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg"
                                                alt="" width="50">
                                        </span>
                                    </div>
                                    <button type="submit" id="placeOrderButton"
                                        class="btn btn-block btn-outline-primary btn-lg ">CHECKOUT</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        const paymentForm = document.getElementById('paymentForm');
        const cashOnDeliveryRadio = document.querySelector('input[name="dbt"][value="cd"]');
        const paypalRadio = document.querySelector('input[name="dbt"][value="paypal"]');

        cashOnDeliveryRadio.addEventListener('change', function() {
            if (cashOnDeliveryRadio.checked) {
                paymentForm.action = "{{ route('orders.store') }}";
            }
        });

        paypalRadio.addEventListener('change', function() {
            if (paypalRadio.checked) {
                paymentForm.action = "{{ route('buyProduct') }}";
            }
        });
    </script>
@endsection
