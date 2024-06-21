@extends('frontend.layouts.app')
@section('frontend')
<!-- slider -->
<section id="slider" class="sectio">
    <div class="content" data-aos="fade-up" data-aos-duration="2600">
        <h1>Medisspro</h1>
        <h5>The world's most innovative healthcare network</h5>
        <p>Medisspro provides healthcare providers with easy access to the right solution for their diverse needs.</p>
        <a href="{{route('aboutus.page')}}" class="btn my-btn my-btn-white">Read more</a>
    </div>
    <div id="main-slider" class="owl-carousel owl-theme">
        <div class="item">
            <img src="{{asset('asset/image/banner/banner-01.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('asset/image/banner/banner-02.jpg')}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset('asset/image/banner/banner-03.jpg')}}" alt="">
        </div>
    </div>
    <div class="slider-bg-clr"></div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-01.svg')}}" alt="bg-2">
    </div>
</section>
<!-- slider -->
<!--top section-->
<section class="section-area">
    <section class="container">
        <section class="top-section">
            <section class="section1-area" data-aos="fade-up" data-aos-duration="2400">
                <img src="{{asset('asset/image/icon/services.png')}}" alt="section1-img1" class="section1-img" loading="lazy"
                     data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                <section class="section1-text">
                    <h2 class="h4">Services</h2>
                    <p>We provide the best services to the medical supplies.</p>
                </section>
            </section>
            <section class="section1-area" data-aos="fade-up" data-aos-duration="2400">
                <img src="{{asset('asset/image/icon/products.png')}}" alt="section1-img1" class="section1-img" loading="lazy"
                     data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                <section class="section1-text">
                    <h2 class="h4">Products</h2>
                    <p>Our products is best in medical field.</p>
                </section>
            </section>
            <section class="section1-area" data-aos="fade-up" data-aos-duration="2400">
                <img src="{{asset('asset/image/icon/distibutor.png')}}" alt="section1-img1" class="section1-img" loading="lazy"
                     data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                <section class="section1-text">
                    <h2 class="h4">Distributors</h2>
                    <p>We are committed to providing high-quality medical products to the distributors.</p>
                </section>
            </section>
        </section>
    </section>
</section>
<!--top section end-->
<!--about section-->
<section class="about-section section-area2 pt-0">
    <section class="container">
        <section class="row" style="align-items: center;">
            <section class="col-md-6 about-img" data-aos="fade-right" data-aos-offset="400"
                     data-aos-easing="ease-in-sine">
                <img src="{{asset('asset/image/banner/about-us.jpg')}}" alt="about-img" loading="lazy">
            </section>
            <section class="col-md-6" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div class="my-heading">
                    <h2 class="h1">About Medisspro</h2>
                    <p>Medisspro is on a quest to revolutionize the healthcare industry, leaving no stone unturned in
                        our quest to become the ultimate solutions provider. Our comprehensive solutions cover every
                        aspect of healthcare provision, from manufacturing of medical disposables and hospital
                        furniture,
                        distribution of diagnostic devices, medical devices/equipments to home care products.</p>
                    <p>With our cutting-edge range of products & services, we empower hospitals to deliver top-quality
                        care while meeting regulatory requirements & industry standards.</p>
                </div>
            </section>
        </section>
    </section>
</section>
<!--about section end-->
<!--services section-->
<section class="services-section" data-aos="fade-up" data-aos-duration="2400">
    <div class="bg-shape">
        <img src="{{asset('asset/image/img/bg-02.svg')}}" alt="bg-2">
    </div>
    <section class="container">
        <div class="my-heading">
            <h2 class="h1">Our services</h2>
            <p>We provide the best services to the medical field. We are committed to providing high-quality medical products.</p>
        </div>
        <div class="carousel-area" data-aos="fade-up" data-aos-duration="2400">
            <div class="owl-carousel owl-theme services-carousel">
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/medical-and-surgical-equipment.png')}}" alt="icon-01" class="services-icon" loading="lazy">
                    <h3 class="card-name">medical/surgical <br> equipment & disposables</h3>
                    <p>We provide comprehensive range of a high-quality medical/surgical equipment & disposables</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Enquiry now!</button>
                </section>
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/icu-operation.png')}}" alt="icon-02" class="services-icon" loading="lazy">
                    <h3 class="card-name">Specialized <br> ICU operations</h3>
                    <p>We deliver critical equipment and support services for intensive care units</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Enquiry now!</button>
                </section>
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/healthcare-professional-recruitments.png')}}" alt="icon-03" class="services-icon" loading="lazy">
                    <h3 class="card-name">Healthcare professional<br>recruitments (India/abroad)</h3>
                    <p>We offer recruitment services for healthcare professionals, both in India & abroad.</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Enquiry now!</button>
                </section>
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/hospital-management-administration.png')}}" alt="icon-04" class="services-icon" loading="lazy">
                    <h3 class="card-name">Hospital management,<br>administration & operations</h3>
                    <p>Our comprehensive solutions encompass strategic consulting, to enhance efficiency</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Enquiry now!</button>
                </section>
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/home-care-services.png')}}" alt="icon-01" class="services-icon" loading="lazy">
                    <h3 class="card-name">Home Care Services</h3>
                    <p>Our Services are to deliver compassionate care, medical equipment, and support to patients in the comfort of their homes.</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Enquiry now!</button>
                </section>
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/health-care-it-services.png')}}" alt="icon-02" class="services-icon" loading="lazy">
                    <h3 class="card-name">Health Care IT Services,<br> Hospital Management Software</h3>
                    <p>We provide cutting-edge health IT services & hospital administration software to improve workflows, & patient care</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Enquiry now!</button>
                </section>
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/medico-legal-services.png')}}" alt="icon-03" class="services-icon" loading="lazy">
                    <h3 class="card-name">Medico-legal Services</h3>
                    <p>the Medical Fraternity from everyday troubles. Our Medico-Legal Services are headed by 20-year+ experience Supreme and High Court veteran Adv Harish VS</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Enquiry now!</button>
                </section>
                <section class="services-card">
                    <img src="{{asset('asset/image/icon/medical-tourism.png')}}" alt="icon-04" class="services-icon" loading="lazy">
                    <h3 class="card-name">Medical Tourism</h3>
                    <p>We provide comprehensive, cost-effective medical care to patients in India and overseas. Our end-to-end services provide us a unique medical tourism option</p>
                    <button class="btn btn-primary read-mare" onclick="openInquiry()">Enquiry now!</button>
                </section>
            </div>
        </div>
    </section>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--services section end-->
<!--achievements section-->
<section class="section-area2" data-aos="fade-up" data-aos-duration="2400">
    <section class="container">
        <section class="achievements-section">
            <div class="my-heading">
                <h2 class="h1">Key achievements</h2>
                <p>Your Trusted Partner In Medical Supplies.</p>
            </div>
            <section class="section5-area">
                <section class="section-box section-box1 my-order2">
                    <section class="section5-text" data-aos="fade-right" data-aos-offset="400"
                             data-aos-easing="ease-in-sine">
                        <section class="text">
                            <h2 class="h4">Logistic</h2>
                            <p>Medical logistics is the logistics of pharmaceuticals, medical and surgical supplies.</p>
                        </section>
                        <h3 class="h6" style="margin-right: 0;">01</h3>
                    </section>
                    <section class="section5-text" data-aos="fade-right" data-aos-offset="400"
                             data-aos-easing="ease-in-sine">
                        <section class="text">
                            <h2 class="h4">Distributor</h2>
                            <p>Medicine distributors play a crucial role in health industry by providing medicical equipments.</p>
                        </section>
                        <h3 class="h6" style="margin-right: 0;"><span class="d-sm-none">02</span> <span
                                class="d-none d-sm-block">03</span></h3>
                    </section>
                </section>
                <section class="section-box section-box2 my-order1" data-aos="fade-up" data-aos-duration="2400">
                    <img src="{{asset('asset/image/banner/key-achivement.jpg')}}" alt="section5-img3" class="section5-main-img"
                         loading="lazy">
                </section>
                <section class="section-box section-box1 my-order3">
                    <section class="section5-text" data-aos="fade-left" data-aos-offset="400"
                             data-aos-easing="ease-in-sine">
                        <h3 class="h6" style="margin-left: 0;"><span class="d-sm-none">03</span> <span
                                class="d-none d-sm-block">02</span></h3>
                        <section class="text">
                            <h2 class="h4">Business</h2>
                            <p>Health Marketing frequently be a B2C form of marketing, as it encompasses wellness.</p>
                        </section>
                    </section>
                    <section class="section5-text" data-aos="fade-left" data-aos-offset="400"
                             data-aos-easing="ease-in-sine">
                        <h3 class="h6" style="margin-left: 0;">04</h3>
                        <section class="text">
                            <h2 class="h4">Collaboration</h2>
                            <p>Collaboration is defined as health care professionals assuming complementary roles.</p>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!--achievements section end-->
<!--testimonial section-->
<section class="testimonial-section" data-aos="fade-up" data-aos-duration="2400">
    <div class="bg-shape">
        <img src="{{asset('asset/image/img/bg-02.svg')}}" alt="bg-2">
    </div>
    <div class="container">
        <div class="my-heading">
            <h2 class="h1">Our Testimonial</h2>
            <p>This feedback is motivation for us</p>
        </div>
        <div class="carousel-area" data-aos="fade-up" data-aos-duration="2400">
            <div class="owl-carousel owl-theme testimonial-carousel">
                <div class="testimonial-card">
                    <div class="testimonial-body">
                        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
                        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
                        <h5>Dr. Deepa</h5>
                        <h6>CEO Medisspro groups</h6>
                        <p>As a doctor, I have seen the challenges we face in providing quality care to all. Despite
                            these, I remain optimistic about the future of healthcare in India and believe that
                            innovation and collaboration can help us overcome them. At Medisspro, we are committed to
                            advancing healthcare in India and improving the lives of patients.</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-body">
                        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
                        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
                        <h5>Dr. Deepa</h5>
                        <h6>CEO Medisspro groups</h6>
                        <p>As a doctor, I have seen the challenges we face in providing quality care to all. Despite
                            these, I remain optimistic about the future of healthcare in India and believe that
                            innovation and collaboration can help us overcome them. At Medisspro, we are committed to
                            advancing healthcare in India and improving the lives of patients.</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-body">
                        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
                        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
                        <h5>Dr. Deepa</h5>
                        <h6>CEO Medisspro groups</h6>
                        <p>As a doctor, I have seen the challenges we face in providing quality care to all. Despite
                            these, I remain optimistic about the future of healthcare in India and believe that
                            innovation and collaboration can help us overcome them. At Medisspro, we are committed to
                            advancing healthcare in India and improving the lives of patients.</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-body">
                        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
                        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
                        <h5>Dr. Deepa</h5>
                        <h6>CEO Medisspro groups</h6>
                        <p>As a doctor, I have seen the challenges we face in providing quality care to all. Despite
                            these, I remain optimistic about the future of healthcare in India and believe that
                            innovation and collaboration can help us overcome them. At Medisspro, we are committed to
                            advancing healthcare in India and improving the lives of patients.</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-body">
                        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
                        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
                        <h5>Dr. Deepa</h5>
                        <h6>CEO Medisspro groups</h6>
                        <p>As a doctor, I have seen the challenges we face in providing quality care to all. Despite
                            these, I remain optimistic about the future of healthcare in India and believe that
                            innovation and collaboration can help us overcome them. At Medisspro, we are committed to
                            advancing healthcare in India and improving the lives of patients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--testimonial section end-->
<!--gallery section-->
<section class="gallery-section section-area2" id="gallery" data-aos="fade-up" data-aos-duration="2400">
    <section class="container">
        <div class="my-heading">
            <h2 class="h1">our gallery</h2>
            <!-- <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this
                the first true generator on the Internet.</p> -->
        </div>
        <section class="grid-container gallery-container">
            <section class="grid-item item1" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset('asset/image/gallery/gallery-01.jpg')}}">
                    <img src="{{asset('asset/image/gallery/gallery-01.jpg')}}" alt="gallery1" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item2" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset('asset/image/gallery/gallery-02.jpg')}}">
                    <img src="{{asset('asset/image/gallery/gallery-02.jpg')}}" alt="gallery2" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item3" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset('asset/image/gallery/gallery-03.jpg')}}">
                    <img src="{{asset('asset/image/gallery/gallery-03.jpg')}}" alt="gallery3" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item4" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset('asset/image/gallery/gallery-04.jpg')}}">
                    <img src="{{asset('asset/image/gallery/gallery-04.jpg')}}" alt="gallery4" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item5" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset('asset/image/gallery/gallery-05.jpg')}}">
                    <img src="{{asset('asset/image/gallery/gallery-05.jpg')}}" alt="gallery5" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item6" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset('asset/image/gallery/gallery-06.jpg')}}">
                    <img src="{{asset('asset/image/gallery/gallery-06.jpg')}}" alt="gallery6" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item7" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset('asset/image/gallery/gallery-07.jpg')}}">
                    <img src="{{asset('asset/image/gallery/gallery-07.jpg')}}" alt="gallery7" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
        </section>
    </section>
</section>
<!--gallery section end-->
@endsection
    