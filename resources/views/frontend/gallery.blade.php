@extends('frontend.layouts.app')
@section('frontend')
<!--nav end-->
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="h2">our Gallery</h1>
        <p>The generated Lorem Ipsum is therefore always free from repetition.</p>
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--gallery section-->
<section class="gallery-section section-area2" id="gallery">
    <section class="container">
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

