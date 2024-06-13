@extends('frontend.layouts.app')
@section('frontend')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="h2">Our services</h1>
        <p>We provide the best services to the medical field. We are committed to providing high-quality medical products.</p>
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--services section-->
<section class="services-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/medical-and-surgical-equipment.png')}}" alt="icon-01" class="services-icon" loading="lazy">
                    <h3 class="card-name">medical/surgical equipment & disposables</h3>
                    <p>We provide comprehensive range of a high-quality medical/surgical equipment & disposables</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/icu-operation.png')}}" alt="icon-02" class="services-icon" loading="lazy">
                    <h3 class="card-name">Specialized ICU operations</h3>
                    <p>We deliver critical equipment and support services for intensive care units</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/healthcare-professional-recruitments.png')}}" alt="icon-03" class="services-icon" loading="lazy">
                    <h3 class="card-name">Healthcare professional recruitments (India/abroad)</h3>
                    <p>We offer recruitment services for healthcare professionals, both in India & abroad.</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/hospital-management-administration.png')}}" alt="icon-04" class="services-icon" loading="lazy">
                    <h3 class="card-name">Hospital management, administration & operations</h3>
                    <p>Our comprehensive solutions encompass strategic consulting, to enhance efficiency</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/home-care-services.png')}}" alt="icon-01" class="services-icon" loading="lazy">
                    <h3 class="card-name">Home Care Services</h3>
                    <p>Our Services are to deliver compassionate care, medical equipment, and support to patients in the comfort of their homes.</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/health-care-it-services.png')}}" alt="icon-02" class="services-icon" loading="lazy">
                    <h3 class="card-name">Health Care IT Services, Hospital Management Software</h3>
                    <p>We provide cutting-edge health IT services & hospital administration software to improve workflows, & patient care</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/medico-legal-services.png')}}" alt="icon-03" class="services-icon" loading="lazy">
                    <h3 class="card-name">Medico-legal Services</h3>
                    <p>the Medical Fraternity from everyday troubles. Our Medico-Legal Services are headed by 20-year+ experience Supreme and High Court veteran Adv Harish VS</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/medical-tourism.png')}}" alt="icon-04" class="services-icon" loading="lazy">
                    <h3 class="card-name">Medical Tourism</h3>
                    <p>We provide comprehensive, cost-effective medical care to patients in India and overseas. Our end-to-end services provide us a unique medical tourism option</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Inquiry now!</button>
                </section>
            </div>
            <!-- <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/icon-01.png')}}" alt="icon-01" class="services-icon" loading="lazy">
                    <h3 class="card-name">medical/surgical <br> equipment & disposables</h3>
                    <p>The generated Lorem Ipsum is therefore always free repetition.</p>
                    <button type="button" class="btn btn-primary read-mare" data-toggle="modal" data-target="#inquiry-modal">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/icon-02.png')}}" alt="icon-02" class="services-icon" loading="lazy">
                    <h3 class="card-name">Specialized <br> ICU operations</h3>
                    <p>The generated Lorem Ipsum is therefore always free repetition.</p>
                    <button type="button" class="btn btn-primary read-mare" data-toggle="modal" data-target="#inquiry-modal">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/icon-03.png')}}" alt="icon-03" class="services-icon" loading="lazy">
                    <h3 class="card-name">healthcare professional<br>recruitments (India/abroad)</h3>
                    <p>The generated Lorem Ipsum is therefore always free repetition.</p>
                    <button type="button" class="btn btn-primary read-mare" data-toggle="modal" data-target="#inquiry-modal">Inquiry now!</button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/icon-04.png')}}" alt="icon-04" class="services-icon" loading="lazy">
                    <h3 class="card-name">Hospital management,<br>administration & operations</h3>
                    <p>The generated Lorem Ipsum is therefore always free repetition.</p>
                    <button type="button" class="btn btn-primary read-mare" data-toggle="modal" data-target="#inquiry-modal">Inquiry now!</button>
                </section>
            </div> -->
        </div>
    </div>
</section>
<!--services section end-->
@endsection

