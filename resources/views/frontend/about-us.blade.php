@extends('frontend.layouts.app')
@section('frontend')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="h2">We tirelessly strive to provide utmost professionalism & unmatched service in every interaction</h1>
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--about section-->
<section class="about-section section-area2 about-page">
    <section class="container">
        <section class="row">
            <section class="col-md-12 col-lg-10 m-auto">
                <div class="my-heading">
                    <h2 class="h1"  data-aos="fade-up" data-aos-duration="2400">About Medisspro</h2>
                    <p  data-aos="fade-up" data-aos-duration="2400">Medisspro is on a quest to revolutionize the healthcare industry, leaving no stone unturned in
                        our quest to become the ultimate solutions provider. Our comprehensive solutions cover every
                        aspect of healthcare provision, from manufacturing of medical disposables and hospital
                        furniture, distribution of diagnostic devices, medical devices/equipments to home care products.
                        With our cutting-edge range of products & services, we empower hospitals to deliver top-quality
                        care while meeting regulatory requirements & industry standards.</p>
                    <p  data-aos="fade-up" data-aos-duration="2400">Renowned for their technological excellence and unwavering
                        durability, our products are instrumental in ensuring optimal patient
                        outcomes. We are committed to delivering international-standard
                        products and services, driven by our team of highly qualified
                        professionals who are dedicated to bringing you the latest
                        innovations in medical technology.</p>
                    <p  data-aos="fade-up" data-aos-duration="2400">At the heart of our ethos is the 'Customer First' concept. We tirelessly
                        strive to provide utmost professionalism & unmatched service in
                        every interaction. With a comprehensive understanding of the
                        unique challenges hospitals and healthcare providers confront, we
                        offer end- to-end solutions tailored to your needs. Whether you need
                        licensing, construction services or expert medico-legal advice,
                        Medisspro has got you covered.</p>
                </div>
            </section>
        </section>
    </section>
</section>
<!--about section end-->
<!--about section 2-->
<section class="about-section about-page-2" data-aos="fade-up" data-aos-duration="2400">
    <div class="bg-shape">
        <img src="{{asset('asset/image/img/bg-02.svg')}}" alt="bg-2">
    </div>
    <section class="container">
        <section class="row">
            <section class="col-md-12 col-lg-11 m-auto">
                <section class="row">
                    <section class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                        <section class="vision-card">
                            <img src="{{asset('asset/image/banner/our-vision.jpg')}}" alt="about-img" loading="lazy">
                            <div class="my-heading">
                                <h2 class="h1">Our vision</h2>
                                <p>Our vision is to revolutionize the healthcare industry by providing cutting-edge
                                    medical solutions with exceptional customer service. Our company is dedicated to
                                    enhancing patient care by leveraging cutting-edge technology and state- of-the-art
                                    medical equipment. To achieve this, we will drive innovation, expand our reach,
                                    and inspire trust and confidence in our customers as a respected name in
                                    healthcare.</p>
                            </div>
                        </section>
                    </section>
                    <section class="col-md-6" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                        <section class="vision-card">
                            <img src="{{asset('asset/image/banner/our-mision.jpg')}}" alt="about-img" loading="lazy">
                            <div class="my-heading">
                                <h2 class="h1">Our mission</h2>
                                <p>Our mission at Medisspro is to empower healthcare professionals with innovative & advanced
                                    medical equipment, enabling them to provide the best possible care to their patients. We are
                                    committed to delivering quality products and exceptional customer service that inspire
                                    confidence and make a difference in people's lives. Our goal is to promote cost effective
                                    healthcare solutions that are accessible to everyone.</p>
                            </div>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--about section 2 end-->
<!--MD section-->
<section class="md-section section-area" data-aos="fade-up" data-aos-duration="2400">
    <section class="container">
        <section class="md-area">
            <section class="row no-gutters" style="max-height: 100%;">
                <section class="col-md-4">
                    <section class="md-img">
                        <img src="{{asset('asset/image/img/md-img.png')}}" alt="md-img">
                        <div class="my-heading">
                            <h2>Karthikk Somyaji</h2>
                            <h6>Managing Director,<br>Medisspro Group of Companies</h6>
                        </div>
                    </section>
                </section>
                <section class="col-md-8">
                    <section class="md-text">
                        <h5>Message from Managing Director</h5>
                        <P>At Medisspro, we are wholeheartedly committed to delivering an unmatched
                            level of customer service that surpasses industry standards. We comprehend the pivotal role
                            that medical technology plays in your lives,which is why we tirelessly strive to provide
                            tailor-made, end-to-end solutions that cater to your unique needs. From procuring the most
                            innovative technologies to seamless execution, we stand by your side every step of the way.</P>
                        <p>Transparency & integrity are the bedrock of our operations. Resting on our laurels is
                            not an option at Medispro. Instead, we continuously explore new avenues to innovate
                            & enhance our offerings. Whether through cutting-edge technologies or world-class
                            customer service, we are resolutely committed to enhancing patient outcomes and
                            revolutionizing your overall operations..</p>
                        <p>Together, let's embark on a remarkable journey of excellence & transformation.</p>
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>
<!--MD section end-->
<!--testimonial section-->
<section class="testimonial-section pb-0" data-aos="fade-up" data-aos-duration="2400">
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
        <p>As a doctor, I have seen the challenges we face in  providing quality care to all. Despite these, I remain  optimistic about the future of healthcare in India and  believe that innovation and collaboration can help us  overcome them. At Medisspro, we are committed to  advancing healthcare in India and improving the lives of patients.</p>
    </div>
</div><div class="testimonial-card">
    <div class="testimonial-body">
        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
        <h5>Dr. Deepa</h5>
        <h6>CEO Medisspro groups</h6>
        <p>As a doctor, I have seen the challenges we face in  providing quality care to all. Despite these, I remain  optimistic about the future of healthcare in India and  believe that innovation and collaboration can help us  overcome them. At Medisspro, we are committed to  advancing healthcare in India and improving the lives of patients.</p>
    </div>
</div><div class="testimonial-card">
    <div class="testimonial-body">
        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
        <h5>Dr. Deepa</h5>
        <h6>CEO Medisspro groups</h6>
        <p>As a doctor, I have seen the challenges we face in  providing quality care to all. Despite these, I remain  optimistic about the future of healthcare in India and  believe that innovation and collaboration can help us  overcome them. At Medisspro, we are committed to  advancing healthcare in India and improving the lives of patients.</p>
    </div>
</div><div class="testimonial-card">
    <div class="testimonial-body">
        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
        <h5>Dr. Deepa</h5>
        <h6>CEO Medisspro groups</h6>
        <p>As a doctor, I have seen the challenges we face in  providing quality care to all. Despite these, I remain  optimistic about the future of healthcare in India and  believe that innovation and collaboration can help us  overcome them. At Medisspro, we are committed to  advancing healthcare in India and improving the lives of patients.</p>
    </div>
</div><div class="testimonial-card">
    <div class="testimonial-body">
        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
        <h5>Dr. Deepa</h5>
        <h6>CEO Medisspro groups</h6>
        <p>As a doctor, I have seen the challenges we face in  providing quality care to all. Despite these, I remain  optimistic about the future of healthcare in India and  believe that innovation and collaboration can help us  overcome them. At Medisspro, we are committed to  advancing healthcare in India and improving the lives of patients.</p>
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
<!--why section-->
<section class="about-section section-area why-section">
    <section class="container">
        <section class="row" style="align-items: center;">
            <section class="col-md-6 about-img" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <img src="{{asset('asset/image/banner/why-medisspro.jpg')}}" alt="about-img" loading="lazy">
            </section>
            <section class="col-md-6" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div class="my-heading">
                    <h2 class="h1">why Medisspro?</h2>
                    <p>Our brand has earned widespread recognition and trust, delivering a
                        comprehensive range of healthcare solutions. Medisspro takes pride in offering
                        high-quality products manufactured with the latest technology and adhering to
                        stringent quality standards. This commitment ensures that patients receive safe
                        and effective treatment while healthcare professionals can rely on the
                        equipment's accuracy and precision.</p>
                    <p>With an extensive array of products tailored to various medical specialties,
                        Medisspro provides healthcare providers with easy access to the right solution for
                        their diverse needs.</p>
                    <P>At Medisspro, excellent customer service and technical support are paramount.
                        Our knowledgeable and experienced staff are dedicated to assisting healthcare
                        providers in selecting the ideal products and resolving any issues promptly.</P>
                    <p>By choosing Medisspro, healthcare providers stay at the forefront, delivering
                        superior care to their patients. Our unwavering commitment to quality, multiform
                        product range, exceptional customer service, and relentless pursuit of innovation
                        make us the trusted and reliable brand in the healthcare industry. Join us in a
                        future where excellence in medical supplies and equipment is guaranteed.</p>
                </div>
            </section>
        </section>
    </section>
</section>
<!--why section end-->
@endsection
