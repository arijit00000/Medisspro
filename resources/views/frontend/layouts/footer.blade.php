@if(isset($data))
@foreach($data as $da)

@endforeach
@endif

<!--footer-->
<footer id="contact" data-aos="fade-up" data-aos-duration="2000">
    <div class="bg-shape">
        <img src="{{asset('asset/image/img/bg-02.svg')}}" alt="bg-2">
    </div>
    <section class="container">
        <section class="row">
            <section class="col-md-12 col-lg-4">
                <img src="{{asset('asset/image/logo/logo.png')}}" alt="footer-logo" class="footer-logo" loading="lazy">
                <p class="footer-p footer-text">{{$da->footer_text}}</p>
                <section class="social-icon">
                    <a href="#"><i data-feather="facebook"></i></a>
                    <a href="#"><i data-feather="instagram"></i></a>
                    <a href="#"><i data-feather="linkedin"></i></a>
                    <a href="#"><i data-feather="twitter"></i></a>
                </section>
            </section>
            <section class="col-md-3 col-lg-2">
                <h3 class="h5">Useful links</h3>
                <ul class="footer-link">
                    <li><a href="{{route('home.page')}}">Home</a></li>
                    <li><a href="{{route('aboutus.page')}}">About us</a></li>
                    <li><a href="{{route('service.page')}}">Services</a></li>
                    <li><a href="{{route('product.page')}}">Products</a></li>
                    <li><a href="{{route('distributor.page')}}">Distributor</a></li>
                    <li><a href="{{route('gallary.page')}}">Gallery</a></li>
                    <!-- <li><a href="#">Blog</a></li> -->
                    <li><a href="{{route('career.page')}}">Careers</a></li>
                    <li><a href="{{route('contact.page')}}">Contact Us</a></li>
                </ul>
            </section>
            <section class="col-md-5 col-lg-3" id="our-contacts">
                <h3 class="h5">Contact Info</h3>
                <ul class="footer-contact">
                    <li><i data-feather="map-pin" style="margin-top: 5px;"></i>
                        <p class="footer-p">Corporate office : {{$da->corporate_office}}</p></li>
                    <li><i data-feather="map-pin" style="margin-top: 5px;"></i>
                        <p class="footer-p">Branch office : {{implode(', ',$da->branch_office)}}</p></li>
                    <li><i data-feather="globe"></i> <a href="{{$da->web}}">www.medisspro.com</a></li>
                    <li><i data-feather="mail"></i> <a>{{$da->email}}</a></li>
                    <li><i data-feather="phone-call"></i> <a>+91 {{$da->mobile}}</a></li>
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
        <div class="footer-bottom"><p>Copyright © 2024 All Rights Reserved.</p></div>
    </section>
</footer>
<!--footer end-->

<!--Inquiry Forms Modal-->
<div class="modal fade" id="inquiry-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-h5">Enquiry Forms</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="#" class="my-form" id="service_inquiry" method="POST">
                    <div class="form-group form-heading">
                        <h2 class="form-h4">Send your Enquiry</h2>
                        <p>If you have any questions please fell free to contact with us.</p>
                    </div>
                    <div class="form-group form-group-row">
                        <input type="text" class="form-control" id="enquireHeading" name="serviceid">
                    </div>
                    <div class="form-group form-group-row">
                        <input type="text" class="form-control" placeholder="First Name" id="name-1" name="f_name">
                        <input type="text" class="form-control" placeholder="Last Name" id="name-2" name="l_name">
                    </div>
                    <div class="form-group form-group-row">
                        <input type="email" class="form-control" placeholder="Email" id="email-1" name="email">
                        <input type="number" class="form-control" placeholder="Phone Number" id="phone-1" name="mobile">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control msg" placeholder="Write Your Enquiry" rows="6" id="msg-1" name="message"></textarea>
                    </div>
                    <button type="button" id="homeinquirysubmit" class="btn my-btn">send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Inquiry Forms Modal end-->

<script>
    function openInquiry(id, headline){
        $('#inquiry-modal').modal('show');
        $('#enquireHeading').val(headline);

        $('#homeinquirysubmit').on('click', function() {

            let URL = "{{route('query.submit')}}"
            let serviceForm = document.getElementById('service_inquiry')
            let service = new FormData(serviceForm)
            // service.append('serviceid',id)
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
<script src="{{asset('asset/js/myForm.js')}}"></script>
</body>
</html>