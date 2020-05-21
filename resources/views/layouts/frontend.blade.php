<!DOCTYPE html>
<html lang="en">

<head>
	<title>Myanmar Treasure</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="manifest" href="/manifest.json">


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

	<script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.14.2/firebase-messaging.js"></script>
</head>

<body class="goto-here">
	<!-- Nav -->
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">Myanmar Treasure</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="col-xl-6 col-lg-6">
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a></li>
						<li class="nav-item"><a href="{{url('shop')}}" class="nav-link">Shop</a></li>
						<li class="nav-item"><a href="{{url('blog')}}" class="nav-link">Blog</a></li>
						<li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
						
					</ul>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4">
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item cta cta-colored"><a href="{{url('cart')}}" class="nav-link"><span
							class="icon-shopping_cart"></span>[<span id="cartCount"></span>]</a></li>
						<li class="nav-item cta cta-colored"><a href="{{url('wishlist')}}" class="nav-link"><span
							class="ion-ios-heart"></span>[<span id="wishlistCount"></span>]</a></li>
						@if (Auth::guest())
						<li class="nav-item"><a href="{{url('login')}}" class="nav-link">Login</a></li>
						<li class="nav-item"><a href="{{url('register')}}" class="nav-link">Register</a></li>
						@else
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-center" href="#" id="profile" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}}</a>
							<div class="dropdown-menu" aria-labelledby="profile">
								<a class="dropdown-item" href="{{url('useredit')}}">Edit Profile</a>
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>
							</div>
						</li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
						@endif
						
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<!-- slider area start  -->
	@yield('slider_area')
	<!-- slider area end  -->


	@yield('content')


	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
					<a href="#" class="mouse-icon">
						<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
					</a>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Myanmar Treasure</h2>
						<p>View the things to do, restaurants and hotels you saved on a map. Easily access all your
							saves while traveling, wherever you go.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Menu</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Shop</a></li>
							<li><a href="#" class="py-2 d-block">About</a></li>
							<li><a href="#" class="py-2 d-block">Journal</a></li>
							<li><a href="#" class="py-2 d-block">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Help</h2>
						<div class="d-flex">
							<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
								<li><a href="#" class="py-2 d-block">Shipping Information</a></li>
								<li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
								<li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
								<li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">FAQs</a></li>
								<li><a href="#" class="py-2 d-block">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Near Archaeological
										Museum, Old Bagan,
										Mandalay Division, Myanmar.</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+959 962 511 480
											<br> +959 402 523 271
										</span></a>

								</li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">info@baganpd.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> All rights reserved
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>


	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg>
	</div>


	<script src="{{ asset('vegefoods') }}/js/jquery.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/popper.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/jquery.easing.1.3.js"></script>
	<script src="{{ asset('vegefoods') }}/js/jquery.waypoints.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/jquery.stellar.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/aos.js"></script>
	<script src="{{ asset('vegefoods') }}/js/jquery.animateNumber.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/bootstrap-datepicker.js"></script>
	<script src="{{ asset('vegefoods') }}/js/scrollax.min.js"></script>
	<script src="{{ asset('vegefoods') }}/js/main.js"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	<script src="{{ asset('argon') }}/js/bootstrap-notify.js"></script>
	<script src="{{ asset('argon') }}/js/custom.js"></script>

	<script>
        $(document).ready(function(){
            const config = {
                apiKey: "AIzaSyCqgsY89aHj-HId7eY7zZ7pFi4q-iOn8Dc",
				authDomain: "myanmar-treasure-4738b.firebaseapp.com",
				databaseURL: "https://myanmar-treasure-4738b.firebaseio.com",
				projectId: "myanmar-treasure-4738b",
				storageBucket: "myanmar-treasure-4738b.appspot.com",
				messagingSenderId: "831127853700",
				appId: "1:831127853700:web:10b1d693217b727e0bc0d1"
            };
            firebase.initializeApp(config);
			const messaging = firebase.messaging();
            messaging.usePublicVapidKey("BDL_4waoMFEBO-xLK88a07zRne-bDiqhNu_jJXYs2rvdgVvbGrTCANwuIuz6ytQOIh_8OXuwv6k0pBAO9alm3S4");
			
            messaging
                .requestPermission()
                .then(function () {
                    return messaging.getToken()
                })
                .then(function(token) {
                    $.ajax({
                        url: '{{ URL::to('/save-device-token') }}',
                        type: 'POST',
                        data: {
                            _token: "{{ csrf_token() }}",
                            user_id: {!! json_encode($user_id ?? '') !!},
                            fcm_token: token
                        },
                        dataType: 'JSON',
                        success: function (response) {
                            console.log(response)
                        },
                        error: function (err) {
                            console.log(" Can't do because: " + err);
                        },
                    });
                })
                .catch(function (err) {
                    console.log("Unable to get permission to notify.", err);
                });
        
            messaging.onMessage(function(payload) {
                console.log('got it');
                console.log(payload);
                const noteTitle = payload.notification.title;
                const noteOptions = {
                    body: payload.notification.body,
                    icon: payload.notification.icon,
                    click_action: payload.notification.click_action
                };
                myNoti.showNotification('top','right',noteOptions);
                
                // new Notification(noteTitle, noteOptions);
            });
        });
    </script>

	@stack('js')
</body>