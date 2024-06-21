@extends('frontend.layouts.app')
@section('frontend')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="h2">Become A Distributor</h1>
        <!-- <p>The generated Lorem Ipsum is therefore always free from repetition.</p> -->
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--ditributor section-->
<section class="about-section section-area about-page">
    <section class="container">
        <section class="row">
            <section class="col-md-12 col-lg-10 m-auto">
                <div class="my-heading">
                    <h2 class="h1"  data-aos="fade-up" data-aos-duration="2400">Your Trusted Partner in Medical Supplies</h2>
                    <p  data-aos="fade-up" data-aos-duration="2400">
                        Medisspro, we are committed to providing high-quality medical products and exceptionalservice to
                        healthcare providers and facilities across the country. Our comprehensive range of products ensures
                        that you have access to everything. you need to deliver top-notch patient care.
                    </p>
                </div>
            </section>
        </section>
    </section>
</section>
<section class="distributor-page section-area pt-0" data-aos="fade-up" data-aos-duration="2400">
    <section class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <section class="achievements-section">
                    <section class="section5-area">
                        <section class="section-box section-box1">
                            <section class="section5-text" data-aos="fade-up" data-aos-duration="2400">
                                <h3 class="h6" style="margin-left: 0;">✔</h3>
                                <section class="text">
                                    <h2 class="h4">About Medisspro</h2>
                                    <p>we are dedicated to excellence and innovation in your industry.Our commitrment
                                        to quality and customer satisfaction has made us a leader in the market.</p>
                                </section>
                            </section>
                            <section class="section5-text" data-aos="fade-up" data-aos-duration="2400">
                                <h3 class="h6" style="margin-left: 0;">✔</h3>
                                <section class="text">
                                    <h2 class="h4">why Partner With Us?</h2>
                                    <p>High-Quality Products: Our products are renowned for their quality and reliability.
                                        Profitable Opportunities: Enjoy attractive profit margins and a strong market demand.
                                        Exclusive Territories: Secure exclusive rights to sell in designated areas.</p>
                                </section>
                            </section>
                            <section class="section5-text" data-aos="fade-up" data-aos-duration="2400">
                                <h3 class="h6" style="margin-left: 0;">✔</h3>
                                <section class="text">
                                    <h2 class="h4">Comprehensive Support</h2>
                                    <p>Benefit from extensive training, marketing support, and continuous assistance.</p>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>

            </div>
            <div class="col-md-5">
                <img class="distributor-img" src="{{asset('asset/image/icon/distributors-img.png')}}" alt="">
            </div>
        </div>
    </section>
</section>
<section  class="distributor-section section-area pt-0" data-aos="fade-up" data-aos-duration="2400">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div  class="distributor-image">
                    <img src="{{asset('asset/image/icon/logistic.png')}}" alt="">
                    <h5>logistic</h5>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div  class="distributor-image">
                    <img src="{{asset('asset/image/icon/distributors.png')}}" alt="">
                    <h5>distributors</h5>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div  class="distributor-image">
                    <img src="{{asset('asset/image/icon/business-marketing.png')}}" alt="">
                    <h5>Business & marketing</h5>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div  class="distributor-image">
                    <img src="{{asset('asset/image/icon/collaboration.png')}}" alt="">
                    <h5>collaboration</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section  class="distributor-section2 section-area2 pt-0" data-aos="fade-up" data-aos-duration="2400">
    <div class="container">
        <section class="row no-gutters">
            <section class="col-md-5 col-lg-6" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <img src="{{asset('asset/image/banner/distributor.jpg')}}" alt="" class="distributor-section2-img">
            </section>
            <section class="col-md-7 col-lg-6" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <form action="#" class="my-form" method="POST" id="contact_us_form">
                    <div class="form-group form-heading">
                        <h2 class="form-h4" style="color: #ffffff !important;">Send your Enquiry</h2>
                        <p style="color: #ffffff !important;">If you have any questions please fell free to contact with us.</p>
                    </div>
                    <div class="form-group form-group-row">
                        <input type="text" class="form-control" placeholder="First Name" id="name1" name="f_name">
                        <input type="text" class="form-control" placeholder="Last Name" id="name2" name="l_name">
                    </div>
                    <div class="form-group form-group-row">
                        <input type="email" class="form-control" placeholder="Email" id="email1" name="email">
                        <input type="number" class="form-control" placeholder="Phone Number" id="phone1" name="phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control msg" placeholder="Write Your Enquiry" rows="6" id="msg1" name="inquiry"></textarea>
                    </div>
                    <input type="hidden" value="distributor" name="type">
                    <button type="button" class="btn my-btn" onclick="submitContactUs()">send</button>
                </form>
            </section>
        </section>
    </div>
</section>
<!--ditributor section end-->
@endsection