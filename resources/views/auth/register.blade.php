<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<title>Myanmar Treasure</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/animate.css">

	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/magnific-popup.css">

	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/aos.css">

	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/ionicons.min.css">

	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/jquery.timepicker.css">


	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/flaticon.css">
	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/icomoon.css">
	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/style.css">
	<link rel="stylesheet" href="{{ asset('vegefoods') }}/css/custom.css">
</head>
<body>
<div class="login">
<div class="container mt--8 pb-5 logform">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-white shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-center"><a class="navbar-brand " style="word-spacing: 10px;" href="/">Myanmar Treasure</a></div>

                        <div class="text-muted text-center mt-2 mb-4"><small>{{ __('Create Account') }}</small></div>
                        
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small><a href="{{ route('login') }}">{{ __('Sign in') }}</a> {{ __('Or sign up with credentials') }}</small>
                        </div>
                        <form role="form" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <!-- <span class="input-group-text"><i class="ni ni-hat-3"></i></span> -->
                                    </div>
                                    <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <!-- <span class="input-group-text"><i class="ni ni-email-83"></i></span> -->
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <!-- <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span> -->
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" type="password" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <!-- <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span> -->
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Confirm Password') }}" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            
                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">{{ __('I agree with the') }} <a href="#!">{{ __('Privacy Policy') }}</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Create account') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

    

