@extends('frontend.layouts.app')
@section('frontend')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="h2">our Blogs</h1>
        <p>Our Big Achievement</p>
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--Blog section-->
<section class="blog-page" data-aos="fade-up" data-aos-duration="2400">
    <section class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2400">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('asset/image/banner/banner-01.jpg')}}" alt="">
                    </div>
                    <div class="blog-date">
                        <h2 class="h4">01</h2>
                        <h3 class="h6">may</h3>
                    </div>
                    <div class="blog-text">
                        <h4 class="h5">Medisspro’s work opportunities with Ontario</h4>
                        <h6><i data-feather="user"></i> Ministry of Economic Development</h6>
                        <p>Thank you for taking part in the roundtable discussion with the Ontario team during our recent mission to India. It was a pleasure meeting you and learning more about your company.</p>
                        <!-- <a class="btn read-mare" href="blog-details.html">View details</a> -->
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2400">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('asset/image/banner/banner-01.jpg')}}" alt="">
                    </div>
                    <div class="blog-date">
                        <h2 class="h4">01</h2>
                        <h3 class="h6">may</h3>
                    </div>
                    <div class="blog-text">
                        <h4 class="h5">blog Title Here</h4>
                        <h6><i data-feather="user"></i> Writers name</h6>
                        <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                            sites still in their infancy.</p>
                        <a class="btn read-mare" href="blog-details.html">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2400">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('asset/image/banner/banner-01.jpg')}}" alt="">
                    </div>
                    <div class="blog-date">
                        <h2 class="h4">01</h2>
                        <h3 class="h6">may</h3>
                    </div>
                    <div class="blog-text">
                        <h4 class="h5">blog Title Here</h4>
                        <h6><i data-feather="user"></i> Writers name</h6>
                        <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                            sites still in their infancy.</p>
                        <a class="btn read-mare" href="blog-details.html">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2400">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('asset/image/banner/banner-01.jpg')}}" alt="">
                    </div>
                    <div class="blog-date">
                        <h2 class="h4">01</h2>
                        <h3 class="h6">may</h3>
                    </div>
                    <div class="blog-text">
                        <h4 class="h5">blog Title Here</h4>
                        <h6><i data-feather="user"></i> Writers name</h6>
                        <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                            sites still in their infancy.</p>
                        <a class="btn read-mare" href="blog-details.html">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2400">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('asset/image/banner/banner-01.jpg')}}" alt="">
                    </div>
                    <div class="blog-date">
                        <h2 class="h4">01</h2>
                        <h3 class="h6">may</h3>
                    </div>
                    <div class="blog-text">
                        <h4 class="h5">blog Title Here</h4>
                        <h6><i data-feather="user"></i> Writers name</h6>
                        <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                            sites still in their infancy.</p>
                        <a class="btn read-mare" href="blog-details.html">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2400">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('asset/image/banner/banner-01.jpg')}}" alt="">
                    </div>
                    <div class="blog-date">
                        <h2 class="h4">01</h2>
                        <h3 class="h6">may</h3>
                    </div>
                    <div class="blog-text">
                        <h4 class="h5">blog Title Here</h4>
                        <h6><i data-feather="user"></i> Writers name</h6>
                        <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
                            sites still in their infancy.</p>
                        <a class="btn read-mare" href="blog-details.html">View details</a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
</section>
<!--Blog section end-->
@endsection

