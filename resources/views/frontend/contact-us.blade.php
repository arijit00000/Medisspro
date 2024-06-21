@extends('frontend.layouts.app')
@section('frontend')

@if(isset($data))
@foreach($data as $da)

@endforeach
@endif

<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="h2">Contact Us</h1>
        <p>We would love to be in touch with you. Please contact us</p>
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--contact-page-->
<section class="contact-page section-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-5" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div class="my-heading">
                    <h2 class="h1">Contact Details</h2>
                    <p>Get in touch with us.</p>
                </div>
                <ul class="my-ul">
                    <li class="my-li" data-aos="fade-up" data-aos-duration="2000">
                        <i data-feather="map-pin"></i>
                        <section class="my-text">
                            <h6>Corporate office :</h6>
                            <h5>{{$da->corporate_office}}</h5>
                        </section>
                    </li>
                    <li class="my-li" data-aos="fade-up" data-aos-duration="2000">
                        <i data-feather="map-pin"></i>
                        <section class="my-text">
                            <h6>Branch office  :</h6>
                            <h5>{{implode(', ',$da->branch_office)}}</h5>
                        </section>
                    </li>
                    <li class="my-li" data-aos="fade-up" data-aos-duration="2000">
                        <i data-feather="globe"></i>
                        <section class="my-text">
                            <h6>Website :</h6>
                            <h5>{{$da->web}}</h5>
                        </section>
                    </li>
                    <li class="my-li" data-aos="fade-up" data-aos-duration="2000">
                        <i data-feather="mail"></i>
                        <section class="my-text">
                            <h6>Email Address :</h6>
                            <h5>{{$da->email}}</h5>
                        </section>
                    </li>
                    <li class="my-li" data-aos="fade-up" data-aos-duration="2000">
                        <i data-feather="phone-call"></i>
                        <section class="my-text">
                            <h6>Phone No :</h6>
                            <h5>+91 {{$da->mobile}}</h5>
                        </section>
                    </li>
                </ul>
            </div>
            <div class="col-md-7" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div class="contact-form">
                    <form action="#" id="contact_us_form" method="post" class="my-form">
                        <div class="form-group form-heading">
                            <h2 class="form-h4">Send your Enquiry</h2>
                            <p>If you have any questions please fell free to contact with us.</p>
                        </div>
                        <div class="form-group form-group-row">
                            <input type="text" class="form-control" placeholder="First Name" id="f_name" name="f_name">
                            <input type="text" class="form-control" placeholder="Last Name" id="l_name" name="l_name">
                        </div>
                        <div class="form-group form-group-row">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                            <input type="number" class="form-control" placeholder="Phone Number" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control msg" placeholder="Write Your Enquiry" rows="6" id="inquiry" name="inquiry"></textarea>
                        </div>
                        <input type="hidden" value="contact" name="type">
                        <button type="button" class="btn my-btn" onclick="submitContactUs()">send</button>
                    </form>
                    <output id="output"></output>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact-page end-->
@endsection
