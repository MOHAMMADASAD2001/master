@section('css', 'css/checkout.css')

@section('title','checkout')

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
                      href="watches.html"><span class="mr-md-3 mr-1">BACK TO SHOP</span></a><i
                      class="fa fa-angle-double-right " aria-hidden="true"></i></li>
                  <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase"
                      href="cart.html"><span class="mr-md-3 mr-1">SHOPPING BAG</span></a><i
                      class="fa fa-angle-double-right text-uppercase " aria-hidden="true"></i></li>
                  <li class="breadcrumb-item font-weight-bold"><a class="black-text text-uppercase active-2"
                      href="checkout.html"><span class="mr-md-3 mr-1">CHECKOUT</span></a></li>
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

                  <div class="row mt-4">
                    <div class="col">
                      <p class="text-muted mb-2">DETAILS</p>
                      <hr class="mt-0">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="NAME" class="small text-muted mb-1">YOUR NAME</label>
                    <input type="text" class="form-control form-control-sm" name="NAME" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email" class="small text-muted mb-1">EMAIL</label>
                    <input type="text" class="form-control form-control-sm" name="email" id="email">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="small text-muted mb-1">PHONE</label>
                    <input type="number" class="form-control form-control-sm" name="phone" id="phone">
                  </div>
                  <div class="form-group">
                    <label for="address" class="small text-muted mb-1">ADDRESS</label>
                    <input type="text" class="form-control form-control-sm" name="address" id="address">
                  </div>



                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card border-0 ">
                <div class="card-header card-2">
                  <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER</p>
                  <hr class="my-2">
                </div>
                <div class="card-body pt-0">
                  <div class="row  justify-content-between">
                    <div class="col-auto col-md-7">
                      <div class="media flex-column flex-sm-row">
                        <img class=" img-fluid" src="images/w2.png">
                        <div class="media-body  my-auto">
                          <div class="row ">
                            <div class="col-auto">
                              <p class="mb-0"><b>Smart watch</b></p><small class="text-muted">Smart watch</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=" pl-0 flex-sm-col col-auto  my-auto">
                      <p class="boxed-1">2</p>
                    </div>
                    <div class=" pl-0 flex-sm-col col-auto  my-auto ">
                      <p><b>179 &dollar;</b></p>
                    </div>
                  </div>
                  <hr class="my-2">
                  <div class="row  justify-content-between">
                    <div class="col-auto col-md-7">
                      <div class="media flex-column flex-sm-row">
                        <img class=" img-fluid " src="images/w4.png" width="62" height="62">
                        <div class="media-body  my-auto">
                          <div class="row ">
                            <div class="col">
                              <p class="mb-0"><b>ROLEX</b></p><small class="text-muted">Watch</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pl-0 flex-sm-col col-auto  my-auto">
                      <p class="boxed">3</p>
                    </div>
                    <div class="pl-0 flex-sm-col col-auto my-auto">
                      <p><b>179 &dollar;</b></p>
                    </div>
                  </div>
                  <hr class="my-2">
                  <div class="row  justify-content-between">
                    <div class="col-auto col-md-7">
                      <div class="media flex-column flex-sm-row">
                        <img class=" img-fluid " src="images/w1.png" width="62" height="62">
                        <div class="media-body  my-auto">
                          <div class="row ">
                            <div class="col">
                              <p class="mb-0"><b>CASIO</b></p><small class="text-muted">Watch</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="pl-0 flex-sm-col col-auto  my-auto">
                      <p class="boxed-1">2</p>
                    </div>
                    <div class="pl-0 flex-sm-col col-auto my-auto">
                      <p><b>179 &dollar;</b></p>
                    </div>
                  </div>
                  <hr class="my-2">
                  <div class="row ">
                    <div class="col">
                      <div class="row justify-content-between">
                        <div class="col-4">
                          <p class="mb-1"><b>Subtotal</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                          <p class="mb-1"><b>179 &dollar;</b></p>
                        </div>
                      </div>
                      <div class="row justify-content-between">
                        <div class="col">
                          <p class="mb-1"><b>Shipping</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                          <p class="mb-1"><b>0 &dollar;</b></p>
                        </div>
                      </div>
                      <div class="row justify-content-between">
                        <div class="col-4">
                          <p><b>Total</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                          <p class="mb-1"><b>537 &dollar;</b></p>
                        </div>
                      </div>
                      <hr class="my-0">
                    </div>
                  </div>
                  <div class="row mb-5 mt-4 ">
                    <div class="col-md-7 col-lg-6 mx-auto"><button type="button"
                        class="btn btn-block btn-outline-primary btn-lg">CHECKOUT</button></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection