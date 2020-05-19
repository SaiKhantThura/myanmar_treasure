@extends('layouts.frontend')

<!-- slier_area_start -->

@section('slider_area')
<div class="hero-wrap hero-bread" style="background-image: url('vegefoods/images/Contact.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Contact</h1>
          </div>
        </div>
      </div>
</div>
@endsection

@section('content')
    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> 	Near Archaeological Museum, Old Bagan, Mandalay Division, Myanmar.</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Phone:</span> <a href="tel://1234567920">	+959 962 511 480 <br>
+959 402 523 271
</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">	info@baganpd.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Website:</span> <a href="#">myanmartreasure.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="{{ route('savingfeedback') }}" method="post" class="bg-white p-5 contact-form" autocomplete="off"  enctype="multipart/form-data">
            @csrf
            @method('post')
                <h2>Feedback Form</h2>
              
              <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <input type="text" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your Name" name="name">
                @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <input type="text" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your Email" name="email">
                @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('subject') ? ' has-danger' : '' }}">
                <input type="text" class="form-control form-control-alternative{{ $errors->has('subject') ? ' is-invalid' : '' }}" placeholder="Subject" name="subject">
                @if ($errors->has('subject'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('subject') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('message') ? ' has-danger' : '' }}">
                <textarea id="" cols="30" rows="7" class="form-control form-control-alternative{{ $errors->has('message') ? ' is-invalid' : '' }}" placeholder="Message" name="message"></textarea>
                @if ($errors->has('message'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('message') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7441.004076145261!2d94.85448717517143!3d21.17220649368318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30b5e50395555555%3A0x8f55ec614e5a7eff!2sOld%20Bagan!5e0!3m2!1sen!2smm!4v1589814557991!5m2!1sen!2smm" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    

@endsection