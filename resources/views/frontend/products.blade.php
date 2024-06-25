@extends('frontend.layouts.app')
@section('frontend')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="h2">Our Product</h1>
        <p>Our products is best in medical field.</p>
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--health priority  section-->
<section class="pro-page blog-page" data-aos="fade-up" data-aos-duration="2400">
    <section class="container">
        <div class="row">
            @if(isset($product))
            @foreach($product as $pro)
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="2400">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset($pro->product_img1)}}" alt="">
                    </div>
                    <div class="blog-text">
                        <h4 class="h5">{{$pro->product_name}}</h4>
                        <p>{{$pro->product_details}}</p>
                        <a class="btn read-mare" href="{{route('product.details', $pro->product_id)}}">View details</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </section>
</section>
<!--health priority section end-->
@endsection
