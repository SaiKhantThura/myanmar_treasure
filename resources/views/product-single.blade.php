@extends('layouts.frontend')

@section('slider_area')
<div class="hero-wrap hero-bread" style="background-image: url({{ asset('vegefoods/images/productss/thingstodo/checkout.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Product Single</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div id="product-details" data-productId="1"></div>
@endsection

@push('js')
<script>
    console.log('doc')
</script>
@endpush