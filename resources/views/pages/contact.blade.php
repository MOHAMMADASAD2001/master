@section('css', 'css/clock.css')

@section('title','contact')

@extends('layout.master')
@section('content')

<!-- clock start  -->
<div class="container d-flex justify-content-center align-items-center ">
  <div class="img-box" style="justify-content: center;">
    <div class="container" >

      <div class="clock" >
          <div class="clock-bg">
              <img src="images/clock.png" alt="...">
          </div>
          <div class="hour">
              <span class="hr" id="hr"></span>
          </div>
          <div class="minute">
              <span class="min" id="min"></span>
          </div>
          <div class="second">
              <span class="sec" id="sec"></span>
          </div>
      </div>

  </div>
  </div>
  </div>
<!-- clock end -->
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
           <form class="custom-form contact-form" action="{{ url('store-contacts') }}" method="post"
                        role="form">
                        @csrf
                        <h2>Contact form</h2>

                        {{-- <p class="mb-4">Or, you can just send an email:
                            <a href="#">info@charity.org</a>
                        </p> --}}
                        @if (session('success'))
                            <div id="vola_message" class="alert alert-primary">{{ session('success') }}</div>
                        @endif
                        <div class="row">

                            {{-- Name input --}}
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="name" id="first-name" class="form-control"
                                    placeholder="Full name" required>
                            </div>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif

                            {{-- Phone input --}}
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="phone" id="first-name" class="form-control"
                                    placeholder="Phone number" required>
                            </div>
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif

                        </div>

                        {{-- Email input --}}
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                            placeholder="MAD@gmail.com" required>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif

                        {{-- Subject input --}}
                        <input name="subject" class="form-control" placeholder="Subject" required>
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif

                        {{-- Message input --}}
                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="What can we help you?"></textarea>
                        @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif

                        <button type="submit" class="form-control">Send Message</button>
                    </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
@section('js', 'js/clock.js')
  @endsection