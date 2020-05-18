@extends('layouts.frontend')


<!-- slider_area_start  -->

@section('slider_area')
<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(vegefoods/images/Slider1.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 ftco-animate text-center">
						<h1 class="mb-2">Wherever you go, go with all your heart</h1>
						<h2 class="subheading mb-4">we deliver traditional products &amp; informations </h2>
						<p><a href="#about" class="btn btn-secondary">View Details</a></p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(vegefoods/images/Slider2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 ftco-animate text-center">
						<h1 class="mb-2">Wherever you go, go with all your heart</h1>
						<h2 class="subheading mb-4">we deliver traditional products &amp; informations </h2>
						<p><a href="#about" class="btn btn-secondary">View Details</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('content')
<section class="ftco-section" id="about">
	<div class="container">
		<div class="row no-gutters ftco-services">
			<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-shipped"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Free Shipping</h3>
						<span>On order over 30000 Ks</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-award"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Superior Quality</h3>
						<span>Quality Products</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-customer-service"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Support</h3>
						<span>24/7 Support</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6 order-md-last align-items-stretch d-flex">
						<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex">
							<div class="prd text text-center">
								<h2>Products</h2>
								<p><a href="shop" class="btn btn-primary">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
							style="background-image: url(vegefoods/images/contents/3.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Men Clothings</a></h2>
							</div>
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end"
							style="background-image: url(vegefoods/images/contents/4.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Women Clothings</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
					style="background-image: url(vegefoods/images/contents/5.jpg);">
					<div class="text px-3 py-1">
						<h2 class="mb-0"><a href="#">Accessories</a></h2>
					</div>
				</div>
				<div class="category-wrap ftco-animate img d-flex align-items-end"
					style="background-image: url(vegefoods/images/contents/6.jpg);">
					<div class="text px-3 py-1">
						<h2 class="mb-0"><a href="#">Handicraft</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<span class="subheading">Handicraft</span>
				<h2 class="mb-4">Our Products</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="vegefoods/images/product-1.jpg"
							alt="Colorlib Template">
						
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Bell Pepper</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span
										class="price-sale">$80.00</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#"
									class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="vegefoods/images/product-2.jpg"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Strawberry</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>$120.00</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#"
									class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="vegefoods/images/product-3.jpg"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Green Beans</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>$120.00</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#"
									class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="vegefoods/images/product-4.jpg"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Purple Cabbage</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>$120.00</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#"
									class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="vegefoods/images/product-5.jpg"
							alt="Colorlib Template">
						
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Tomatoe</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span
										class="price-sale">$80.00</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#"
									class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="vegefoods/images/product-6.jpg"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Brocolli</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>$120.00</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#"
									class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="vegefoods/images/product-7.jpg"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Carrots</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>$120.00</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#"
									class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="vegefoods/images/product-8.jpg"
							alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Fruit Juice</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>$120.00</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="#"
									class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-cart"></i></span>
								</a>
								<a href="#" class="heart d-flex justify-content-center align-items-center ">
									<span><i class="ion-ios-heart"></i></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<span class="subheading">Testimony</span>
				<h2 class="mb-4">Our satisfied customer says</h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url(vegefoods/images/person_1.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
									countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url(vegefoods/images/person_2.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
									countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url(vegefoods/images/person_3.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
									countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url(vegefoods/images/person_1.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
									countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap p-4 pb-5">
							<div class="user-img mb-5" style="background-image: url(vegefoods/images/person_1.jpg)">
								<span class="quote d-flex align-items-center justify-content-center">
									<i class="icon-quote-left"></i>
								</span>
							</div>
							<div class="text text-center">
								<p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the
									countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Garreth Smith</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
	<div class="container py-4">
		<div class="row d-flex justify-content-center py-5">
			<div class="col-md-12 text-center">
				<h2 style="font-size: 22px;" class="mb-0">Hope to enjoy our shop</h2>
				<span>Get e-mail updates about our latest shops and special offers</span>
			</div>
			
		</div>
	</div>
</section>
@endsection




<!-- loader -->
<!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
			stroke="#F96D00" /></svg></div>


<script src="vegefoods/js/jquery.min.js"></script>
<script src="vegefoods/js/jquery-migrate-3.0.1.min.js"></script>
<script src="vegefoods/js/popper.min.js"></script>
<script src="vegefoods/js/bootstrap.min.js"></script>
<script src="vegefoods/js/jquery.easing.1.3.js"></script>
<script src="vegefoods/js/jquery.waypoints.min.js"></script>
<script src="vegefoods/js/jquery.stellar.min.js"></script>
<script src="vegefoods/js/owl.carousel.min.js"></script>
<script src="vegefoods/js/jquery.magnific-popup.min.js"></script>
<script src="vegefoods/js/aos.js"></script>
<script src="vegefoods/js/jquery.animateNumber.min.js"></script>
<script src="vegefoods/js/bootstrap-datepicker.js"></script>
<script src="vegefoods/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="vegefoods/js/google-map.js"></script>
<script src="vegefoods/js/main.js"></script> -->
<script>
	$("a").on("click", function(e) {
    e.preventDefault();
    var sectionID = '#'+ $(this).data("section");
    $("#about section:visible").fadeOut();
    $(sectionID).fadeIn();
	});
</script>

</body>

</html>