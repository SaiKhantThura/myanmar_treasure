@extends('layouts.frontend')

@section('slider_area')
<div class="hero-wrap hero-bread" style="background-image: url('vegefoods/images/wishlist.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-0 bread">My Wishlist</h1>
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
<div id="react-wishlist"></div>
@endsection