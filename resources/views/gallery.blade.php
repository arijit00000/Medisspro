@include('layouts.header')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        @if($gallaryheadline)
            @foreach($gallaryheadline as $gallhead)
            <h2 class="h2">{{$gallhead->headline}}</h2>
            <p>{{$gallhead->subheadline}}</p>
            @endforeach
        @endif
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
@include('layouts.footer')
