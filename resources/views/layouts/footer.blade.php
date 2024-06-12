<!--footer-->

<?php
    // echo"<pre>";
    // print_r($data);
?>

@if($data)
@foreach($data as $da)
@endforeach
@endif
<footer id="contact" data-aos="fade-up" data-aos-duration="2000">
    <div class="bg-shape">
        <img src="{{asset('asset/image/img/bg-02.svg')}}" alt="bg-2">
    </div>
    <section class="container">
        <section class="row">
            <section class="col-md-12 col-lg-4">
                <img src="{{asset('asset/image/logo/logo.png')}}" alt="footer-logo" class="footer-logo" loading="lazy">
                <p class="footer-p footer-text">Lorem ipsum generators on the Internet to repeat predefined chunks as
                    necessary, making this the first true generator on the Internet.</p>
                <section class="social-icon">
    
                    <a href="{{$da->facebook}}"><i data-feather="facebook"></i></a>
                    <a href="{{$da->instragram}}"><i data-feather="instagram"></i></a>
                    <a href="{{$da->linkdin}}"><i data-feather="linkedin"></i></a>
                    <a href="{{$da->twitter}}"><i data-feather="twitter"></i></a>
                
                </section>
            </section>
            <section class="col-md-3 col-lg-2">
                <h3 class="h5">Useful links</h3>
                <ul class="footer-link">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </section>
            <section class="col-md-5 col-lg-3" id="our-contacts">
                <h3 class="h5">Contact Info</h3>
                <ul class="footer-contact">
                    <li><i data-feather="map-pin" style="margin-top: 5px;"></i><p class="footer-p">{{$da->home_address}}</p></li>
                    <li><i data-feather="map-pin" style="margin-top: 5px;"></i><p class="footer-p">{{$da->office_address}}</p></li>
                    <li><i data-feather="globe"></i> <a href="{{$da->website}}">www.medisspro.com</a></li>
                    <li><i data-feather="mail"></i> <a>{{$da->email}}</a></li>
                    <li><i data-feather="phone-call"></i> <a>{{$da->mobile}}</a></li>
                </ul>
            </section>
            <section class="col-md-4 col-lg-3 f-order-2">
                <h3 class="h5">Newsletter</h3>
                <form action="#" class="newsletter-form">
                    <div class="input-group" style="border: none;">
                        <input type="email" placeholder="Enter your email" class="form-control" name="email">
                        <button type="submit" class="btn my-btn w-100">Subscribe</button>
                    </div>
                </form>
            </section>
        </section>
        <div class="footer-bottom"><p>Copyright © 2024  All Rights Reserved.</p></div>
    </section>
</footer>
<!--footer end-->

<script>
    function openInquiry(id, headline) {
        $('#inquiry-modal').modal('show');
        $('#enquire').val(headline);

        $('#homeinquirysubmit').on('click', function() {

            let URL = "{{route('enquire.submit')}}"
            let serviceForm = document.getElementById('service_inquiry')
            let service = new FormData(serviceForm)
            service.append('serviceid',id)
            service.append('_token',"{{ csrf_token() }}")
            
            formSubmit(URL, service)
        });
    }

    function submitContactUs(){
        let URL = "{{route('contact.submit')}}"
        let contactusFrom = document.getElementById('contact_us_form')
        let contactus = new FormData(contactusFrom)
        contactus.append('_token',"{{ csrf_token() }}");

        // for (const [key, value] of contactus) {
        //     output.textContent += `${key}: ${value}\n`;
        // };

        formSubmit(URL, contactus);    
    }

    function resetForm(){
        document.getElementById('service_inquiry').reset()
        document.getElementById('contact_us_form').reset()
    }
</script>
<script src="{{asset('asset/js/app-min.js')}}"></script>
</body>
</html>