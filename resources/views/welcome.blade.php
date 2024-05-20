@include('layouts.header')
<?php
    // echo"<pre>";
    // print_r($gallary);
?>

<!--nav end-->
<!-- slider -->
<section id="slider" class="sectio">
    <div class="content" data-aos="fade-up" data-aos-duration="2600">

    @if($banner)
    @foreach($banner as $ban)
        <h1>{{$ban->headline}}</h1>
        <h5>{{$ban->subheadline}}</h5>
        <p>{{$ban->content}}</p>
        <a href="#" class="btn my-btn my-btn-white">Read more</a>
    </div>
    <div id="main-slider" class="owl-carousel owl-theme">
        <div class="item">
            <img src="{{asset($ban->banner_img_1)}}" alt="">
        </div>
        <div class="item">
            <img src="{{asset($ban->banner_img_2)}}" alt="">
        </div>
    </div>
    @endforeach
    @endif

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
                @if($topheadline)
                @foreach($topheadline as $tophead)
                <img src="{{$tophead->image}}" alt="section1-img1" class="section1-img" loading="lazy"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                <section class="section1-text">
                    <h2 class="h4">{{$tophead->headline}}</h2>
                    <p>{{$tophead->subheadline}}</p>
                </section>
                @endforeach
                @endif

            </section>
            <!-- <section class="section1-area" data-aos="fade-up" data-aos-duration="2400">
                <img src="assets/image/banner/banner-01.jpg" alt="section1-img1" class="section1-img" loading="lazy"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                <section class="section1-text">
                    <h2 class="h4">Heading</h2>
                    <p>Lorem ipsum is simply dummy text of printing & typesetting industry.</p>
                </section>
            </section>
            <section class="section1-area" data-aos="fade-up" data-aos-duration="2400">
                <img src="assets/image/banner/banner-01.jpg" alt="section1-img1" class="section1-img" loading="lazy"  data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                <section class="section1-text">
                    <h2 class="h4">Heading</h2>
                    <p>Lorem ipsum is simply dummy text of printing & typesetting industry.</p>
                </section>
            </section> -->
        </section>
    </section>
</section>
<!--top section end-->
<!--about section-->
<section class="about-section section-area2 pt-0">
    <section class="container">
        <section class="row" style="align-items: center;">
        @if($homeabout)
        @foreach($homeabout as $homeab)
            <section class="col-md-6 about-img" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <img src="{{asset($homeab->image)}}" alt="about-img" loading="lazy">
            </section>
            <section class="col-md-6" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div class="my-heading">
                    <h2 class="h1">{{$homeab->headline}}</h2>
                    <p>{{$homeab->content}}</p>
                </div>
            </section>
        @endforeach
        @endif
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

            @if($serviceheadline)
            @foreach($serviceheadline as $servicehead)
            <h2 class="h1">{{$servicehead->headline}}</h2>
            <p>{{$servicehead->subheadline}}</p>
            @endforeach
            @endif

        </div>
        <div class="carousel-area" data-aos="fade-up" data-aos-duration="2400">
            <div class="owl-carousel owl-theme services-carousel">

                @if($servicecard)
                @foreach($servicecard  as $scard)
                <section class="services-card">
                    <img src="{{asset($scard->image)}}" alt="icon-01" class="services-icon" loading="lazy">
                    <h3 class="card-name">{{$scard->headline}}</h3>
                    <p>{{$scard->content}}</p>
                    <button type="button" class="btn btn-primary read-mare" onclick="openInquiry('{{$scard->s_card_id}}','{{$scard->headline}}')">Inquiry now!</button>
                </section>
                @endforeach
                @endif

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
                
                @if($keyachivementheadline)
                @foreach($keyachivementheadline as $keyhead)
                <h2 class="h1">{{$keyhead->headline}}</h2>
                <p>{{$keyhead->subheadline}}</p>
                @endforeach
                @endif
            
            </div>
            <section class="section5-area">
                <section class="section-box section-box1 my-order2">
                    <section class="section5-text" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
                        <section class="text">
                            @if($keyachivement)
                            @foreach($keyachivement as $keyachive)
                            <h2 class="h4">{{$keyachive->heading_1}}</h2>
                            <p>{{$keyachive->subheading_1}}</p>
                            @endforeach
                            @endif
                        </section>
                        <h3 class="h6" style="margin-right: 0;">01</h3>
                    </section>
                    <section class="section5-text" data-aos="fade-right" data-aos-offset="400" data-aos-easing="ease-in-sine">
                        <section class="text">
                            @if($keyachivement)
                            @foreach($keyachivement as $keyachive)
                            <h2 class="h4">{{$keyachive->heading_3}}</h2>
                            <p>{{$keyachive->subheading_3}}</p>
                            @endforeach
                            @endif
                        </section>
                        <h3 class="h6" style="margin-right: 0;"><span class="d-sm-none">02</span> <span class="d-none d-sm-block">03</span></h3>
                    </section>
                </section>
                <section class="section-box section-box2 my-order1" data-aos="fade-up" data-aos-duration="2400">
                    
                    @if($keyachivement)
                    @foreach($keyachivement as $keyachive)
                    <img src="{{(asset($keyachive->image))}}" alt="section5-img3" class="section5-main-img" loading="lazy">
                    @endforeach
                    @endif

                </section>
                <section class="section-box section-box1 my-order3">
                    <section class="section5-text" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                        <h3 class="h6" style="margin-left: 0;"><span class="d-sm-none">03</span> <span class="d-none d-sm-block">02</span></h3>
                        <section class="text">
                            @if($keyachivement)
                            @foreach($keyachivement as $keyachive)
                            <h2 class="h4">{{$keyachive->heading_2}}</h2>
                            <p>{{$keyachive->subheading_2}}</p>
                            @endforeach
                            @endif
                        </section>
                    </section>
                    <section class="section5-text" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                        <h3 class="h6" style="margin-left: 0;">04</h3>
                        <section class="text">
                            @if($keyachivement)
                            @foreach($keyachivement as $keyachive)
                            <h2 class="h4">{{$keyachive->heading_4}}</h2>
                            <p>{{$keyachive->subheading_4}}</p>
                            @endforeach
                            @endif
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

            @if($testimonialheadline)
            @foreach($testimonialheadline as $testhead)
            <h2 class="h1">{{$testhead->headline}}</h2>
            <p>{{$testhead->subheadline}}</p>
            @endforeach
            @endif
        
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
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-body">
                        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
                        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
                        <h5>Dr. Deepa</h5>
                        <h6>CEO Medisspro groups</h6>
                        <p>As a doctor, I have seen the challenges we face in  providing quality care to all. Despite these, I remain  optimistic about the future of healthcare in India and  believe that innovation and collaboration can help us  overcome them. At Medisspro, we are committed to  advancing healthcare in India and improving the lives of patients.</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-body">
                        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
                        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
                        <h5>Dr. Deepa</h5>
                        <h6>CEO Medisspro groups</h6>
                        <p>As a doctor, I have seen the challenges we face in  providing quality care to all. Despite these, I remain  optimistic about the future of healthcare in India and  believe that innovation and collaboration can help us  overcome them. At Medisspro, we are committed to  advancing healthcare in India and improving the lives of patients.</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-body">
                        <img src="{{asset('asset/image/icon/icon-001.svg')}}" alt="" class="testimonial-icon">
                        <img src="{{asset('asset/image/img/user-01.png')}}" alt="" class="testimonial-img" loading="lazy">
                        <h5>Dr. Deepa</h5>
                        <h6>CEO Medisspro groups</h6>
                        <p>As a doctor, I have seen the challenges we face in  providing quality care to all. Despite these, I remain  optimistic about the future of healthcare in India and  believe that innovation and collaboration can help us  overcome them. At Medisspro, we are committed to  advancing healthcare in India and improving the lives of patients.</p>
                    </div>
                </div>
                <div class="testimonial-card">
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
<!--gallery section-->
<section class="gallery-section section-area2" id="gallery" data-aos="fade-up" data-aos-duration="2400">
    <section class="container">
        <div class="my-heading">

            @if($gallaryheadline)
            @foreach($gallaryheadline as $gallhead)
            <h2 class="h1">{{$gallhead->headline}}</h2>
            <p>{{$gallhead->subheadline}}</p>
            @endforeach
            @endif
        
        </div>
        <section class="grid-container parent-container">
            <section class="grid-item item1" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset($gallary[0]->gallary_img)}}">
                    <img src="{{asset($gallary[0]->gallary_img)}}" alt="gallery1" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item2" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset($gallary[1]->gallary_img)}}">
                    <img src="{{asset($gallary[1]->gallary_img)}}" alt="gallery2" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item3" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset($gallary[2]->gallary_img)}}">
                    <img src="{{asset($gallary[2]->gallary_img)}}" alt="gallery3" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item4" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset($gallary[3]->gallary_img)}}">
                    <img src="{{asset($gallary[3]->gallary_img)}}" alt="gallery4" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item5" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset($gallary[4]->gallary_img)}}">
                    <img src="{{asset($gallary[4]->gallary_img)}}" alt="gallery5" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item6" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset($gallary[5]->gallary_img)}}">
                    <img src="{{asset($gallary[5]->gallary_img)}}" alt="gallery6" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
            <section class="grid-item item7" data-aos="fade-up" data-aos-duration="2400">
                <a class="grid-item-a" href="{{asset($gallary[6]->gallary_img)}}">
                    <img src="{{asset($gallary[6]->gallary_img)}}" alt="gallery7" loading="lazy">
                    <section class="bg-clr"><i data-feather="image"></i></section>
                </a>
            </section>
        </section>
    </section>
</section>
<!--gallery section end-->

<!--Inquiry Forms Modal-->
<div class="modal fade" id="inquiry-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-h5">Inquiry Forms</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="#" class="my-form" id="service_inquiry">
                    <div class="form-group form-heading">
                        <h2 class="form-h4">Send your Inquiry</h2>
                        <p>If you have any questions please fell free to contact with us.</p>
                    </div>
                    <div class="form-group form-group-row">
                        <input type="text" class="form-control" id="enquire" disabled>
                    </div>
                    <div class="form-group form-group-row">
                        <input type="text" class="form-control" placeholder="First Name" id="f_name" name="f_name">
                        <input type="text" class="form-control" placeholder="Last Name" id="l_name" name="l_name">
                    </div>
                    <div class="form-group form-group-row">
                        <input type="email" class="form-control" placeholder="Email" id="inquiryemail" name="email">
                        <input type="number" class="form-control" placeholder="Phone Number" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control msg" placeholder="Write Your Inquiry" rows="6" id="msg" name="inquiry"></textarea>
                    </div>
                    <button type="button" id="homeinquirysubmit" class="btn my-btn">send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Inquiry Forms Modal end-->
@include('layouts.footer')

