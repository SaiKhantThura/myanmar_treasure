@extends('layouts.frontend')

<!-- slider_area_start  -->
@section('slider_area')
<div class="hero-wrap hero-bread" style="background-image: url('vegefoods/images/Blog.jpg');">
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
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-md-12 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch d-md-flex">
                                <a href="single_blog" class="block-20"
                                    style="background-image: url('{{$blog->image}}');">
                                </a>
                                <div class="text d-block pl-md-4">
                                    
                                    <h3 class="heading">
                                        <a href="#">
                                            {{$blog->title}}
                                        </a>
                                    </h3>
                                    <h6>
                                        <b>Type :</b>{{$blog->name}}
                                    </h6>
                                    <p>
                                        {{$blog->description}}
                                    </p>
                                    <p><a href="single_blog" class="btn btn-primary py-2 px-3">Read more</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- <div class="col-md-12 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch d-md-flex">
                            <a href="single_blog" class="block-20"
                                style="background-image: url('vegefoods/images/image_5.jpg');">
                            </a>
                            <div class="text d-block pl-md-4">
                                
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <p><a href="single_blog" class="btn btn-primary py-2 px-3">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch d-md-flex">
                            <a href="single_blog" class="block-20"
                                style="background-image: url('vegefoods/images/image_6.jpg');">
                            </a>
                            <div class="text d-block pl-md-4">
                                
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                    Consonantia, there live the blind texts.</p>
                                <p><a href="single_blog" class="btn btn-primary py-2 px-3">Read more</a></p>
                            </div>
                        </div>
                    </div> -->
                </div>
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
                        @foreach($blog_categories as $category)
                            <li><a href="#">{{$category->name}} [{{count($category->blogs)}}]</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->
@endsection