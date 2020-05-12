@extends('layouts.frontend')

<!-- slider_area_start  -->
@section('slider_area')
<div class="hero-wrap hero-bread" style="background-image: url('vegefoods/images/productss/thingstodo/checkout.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Blog</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">Organic foods is good for your health</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit,
                    quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro
                    adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis,
                    enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta
                    architecto tempora.</p>
                <p>
                    <img src="vegefoods/images/image_1.jpg" alt="" class="img-fluid">
                </p>
                <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt
                    doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo
                    eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis
                    ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>

            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon ion-ios-search"></span>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Categories</h3>
                    <ul class="categories">
                        <li><a href="#">Things to do</a></li>
                        <li><a href="#">Hotels</a></li>
                        <li><a href="#">Traditional Curry </a></li>
                        <li><a href="#">Myanmar Snacks </a></li>
                        <li><a href="#">Drinks </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- .section -->
@endsection