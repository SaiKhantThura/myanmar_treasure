<style>
  .form-group input {
	margin:15px 0;
	padding:15px 10px;
	width:100%;
	outline:none;
	border:1px solid #bbb;
	border-radius:20px;
	display:inline-block;
	-webkit-box-sizing:border-box;
	   -moz-box-sizing:border-box;
	        box-sizing:border-box;
    -webkit-transition:0.2s ease all;
	   -moz-transition:0.2s ease all;
	    -ms-transition:0.2s ease all;
	     -o-transition:0.2s ease all;
	        transition:0.2s ease all;
}
</style>
@extends('layouts.frontend')
@section('slider_area')
<div class="hero-wrap hero-bread" style="background-image: url('vegefoods/images/Contact.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Setting</h1>
          </div>
        </div>
      </div>
</div>
@endsection

@section('content')

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header bg-dark">
              <h5 class="title text-center text-white">Edit Profile</h5>
            </div>
            <div class="card-body">
              <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name:</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email Address:</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-dark">
              <h5 class="title text-center text-white">Change Password</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Current Password:</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">New Password:</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password:</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
              </form>
            </div>
          </div>  
        </div>
      </div>
    </div>
    
  </div>


    
@endsection