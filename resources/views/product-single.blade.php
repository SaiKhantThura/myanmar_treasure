@extends('layouts.frontend')

@section('slider_area')
<div class="hero-wrap hero-bread" style="background-image: url({{ asset('vegefoods/images/productss/thingstodo/checkout.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Product Detail</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div id="product-details" data-productId="{{$product->id}}"></div>
@endsection

@push('js')

@endpush