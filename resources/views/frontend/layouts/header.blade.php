<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Medisspro - Home</title>
    <link rel="shortcut icon" href="{{asset('asset/image/logo/logo-icon.png')}}" type="image/x-icon"
          style="width: 32px;height: 32px;">
    <link rel="icon" href="{{asset('asset/image/logo/logo-icon.png')}}" type="image/x-icon" style="width: 32px;height: 32px;">
    <link rel="preload" href="{{asset('asset/css/app.css')}}" as="style">
    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300,400;700;900&family=Playfair+Display:wght@500;600;700;800;900&display=swap"rel="stylesheet">

    <!-- Ajax Jquery Cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Swal Cdn -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

@if(isset($data))
@foreach($data as $da)

@endforeach
@endif

<!--nav-->
<header>
    <div class="nav-top">
        <div class="container">
            <div class="contact-div">
                <ul class="contact-ul">
                    <li><a><i data-feather="phone-call"></i> <span>+91 {{$da->mobile}}</span></a></li>
                    <li><a><i data-feather="mail"></i> <span>{{$da->email}}</span></a></li>
                </ul>
                <ul class="icon-ul">
                    <li><a href="{{$da->facebook}}"><i data-feather="facebook"></i></a></li>
                    <li><a href="{{$da->instagram}}"><i data-feather="instagram"></i></a></li>
                    <li><a href="{{$da->linkdin}}"><i data-feather="linkedin"></i></a></li>
                    <li><a href="{{$da->twitter}}"><i data-feather="twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav_area">
        <div class="container" id="nav-manu">
            <nav class="navbar navbar-expand-lg">
                <span id="logo"><a href="{{route('home.page')}}"><img src="{{asset('asset/image/logo/logo.png')}}" alt="logo"
                                                          class="my-logo"></a></span>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.page')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('aboutus.page')}}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('service.page')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('product.page')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('distributor.page')}}">Distributor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('gallary.page')}}">Gallery</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('career.page')}}">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact.page')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--nav end-->