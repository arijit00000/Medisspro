@extends('frontend.layouts.app')
@section('frontend')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="h2">our Products</h1>
        <p>The generated Lorem Ipsum is therefore always free from repetition.</p>
    </div>
    <div class="bg-shape mb-0">
        <img src="assets/image/img/bg-03.svg" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--Products section-->
<section class="about-section section-area2">
    @if(isset($product))
    @foreach($product as $pro)
    <section class="container">
        <section class="row" style="align-items: center;">
            <section class="col-md-6 about-img" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div id="carouselExampleCaptions" class="carousel slide products-slide" data-ride="carousel">
                    <div class="carousel-inner zoom-gallery">
                        <div class="carousel-item active">
                            <a href="{{asset($pro->product_img1)}}" data-source="assets/image/banner/banner-01.jpg"
                               title="Image" class="zoom"></a>
                            <img src="{{asset($pro->product_img1)}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <a href="{{asset($pro->product_img2)}}" data-source="assets/image/banner/banner-01.jpg"
                               title="Image" class="zoom"></a>
                            <img src="{{asset($pro->product_img2)}}" class="d-block w-100" alt="...">
                        </div>
                        <!-- <div class="carousel-item">
                            <a href="assets/image/banner/banner-01.jpg" data-source="assets/image/banner/banner-01.jpg"
                               title="Image" class="zoom"></a>
                            <img src="assets/image/banner/banner-01.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <a href="assets/image/banner/banner-01.jpg" data-source="assets/image/banner/banner-01.jpg"
                               title="Image" class="zoom"></a>
                            <img src="assets/image/banner/banner-01.jpg" class="d-block w-100" alt="...">
                        </div> -->
                    </div>
                    <div class="indicators">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
                                <img src="{{asset($pro->product_img1)}}" alt="...">
                            </li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1">
                                <img src="{{asset($pro->product_img2)}}" alt="...">

                            </li>
                            <!-- <li data-target="#carouselExampleCaptions" data-slide-to="2">
                                <img src="assets/image/banner/banner-01.jpg" alt="...">
                            </li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3">
                                <img src="assets/image/banner/banner-01.jpg" alt="...">
                            </li> -->
                        </ol>
                    </div>
                </div>
            </section>
            <section class="col-md-6" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div class="my-heading">
                    <h2 class="h1">{{$pro->product_name}}</h2>
                    <p>{{$pro->product_details}}</p>
                </div>
                <div class="download-section">
                    <div class="download-button">
                       <button class="btn" onclick="openInquiry()">Download Product Brochure</button>               
                   </div>
                </div>
            </section>
        </section>
    </section>
    @endforeach
    @endif
</section>
<!--Products section end-->
@endsection

