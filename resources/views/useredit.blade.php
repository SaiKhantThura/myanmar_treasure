
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
<div class="hero-wrap hero-bread" style="background-image: url('/vegefoods/images/Contact.jpg');">
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
            @if (session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('status') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif  
              <form method="post" action="{{ route('profile.update') }}" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', auth()->user()->name) }}">
                  @if ($errors->has('name'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                  <label for="email">Email Address:</label>
                  <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email"  value="{{ old('email', auth()->user()->email) }}">
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
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
              @if (session('password_status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('password_status') }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              @endif
              <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                @csrf
                @method('put')
                <div class="form-group {{ $errors->has('old_password') ? ' has-danger' : '' }}">
                  <label for="input-current-password">Current Password:</label>
                  <input type="password" class="form-control {{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password" id="input-current-password" aria-describedby="emailHelp" placeholder="">
                  @if ($errors->has('old_password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('old_password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <label for="input-password">New Password:</label>
                  <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" placeholder="">
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Confirm Password:</label>
                  <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword1" placeholder="">
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