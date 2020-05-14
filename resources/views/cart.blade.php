@extends('layouts.frontend')

@section('slider_area')
<div class="hero-wrap hero-bread" style="background-image: url('vegefoods/images/productss/thingstodo/checkout.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div id="react-cart"></div>
@endsection