@extends('frontend.layouts.app')
@section('frontend')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="banner-heading h2">Careers at <span class="highlight"><b>Medisspro</b></span></h1>
        <h4 class="my-top-h4"><span>22Jobs</span> Available Now</h4>
    </div>
    <div class="bg-shape mb-0">
        <img src="{{asset('asset/image/img/bg-03.svg')}}" alt="bg-2">
    </div>
</section>
<!--top section end-->
<!--careers section-->
<section class="about-section section-area2 about-page">
    <section class="container">
        <section class="row">
            <section class="col-md-12 col-lg-10 m-auto">
                <div class="my-heading">
                    <h2 class="h1" data-aos="fade-up" data-aos-duration="2400">Why Join Our Team</h2>
                    <p data-aos="fade-up" data-aos-duration="2400">
                        At Medisspro we're dedicated to providing exceptional care and improving the lives of our
                        patients
                        Our team of healthcare professionals is at öe heart of everything we do.We are always looking
                        for
                        passionate,.skilled individuals to join our team and help us make a difference
                    </p>
                </div>
            </section>
        </section>
    </section>
</section>
<section class="careers-page services-page pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>Product Manneger</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aperiam harum officiis ullam Quia,
                        optio accusantium. Quas?</p>
                    <button type="button" class="btn my-btn" data-toggle="modal" data-target="#apply-modal">apply now
                    </button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>Sales Manneger</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aperiam harum officiis ullam Quia,
                        optio accusantium. Quas?</p>
                    <button type="button" class="btn my-btn" data-toggle="modal" data-target="#apply-modal">apply now
                    </button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>Administration Jobs</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aperiam harum officiis ullam Quia,
                        optio accusantium. Quas?</p>
                    <button type="button" class="btn my-btn" data-toggle="modal" data-target="#apply-modal">apply now
                    </button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>Product Manneger</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aperiam harum officiis ullam Quia,
                        optio accusantium. Quas?</p>
                    <button type="button" class="btn my-btn" data-toggle="modal" data-target="#apply-modal">apply now
                    </button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>Sales Manneger</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aperiam harum officiis ullam Quia,
                        optio accusantium. Quas?</p>
                    <button type="button" class="btn my-btn" data-toggle="modal" data-target="#apply-modal">apply now
                    </button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>Administration Jobs</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aperiam harum officiis ullam Quia,
                        optio accusantium. Quas?</p>
                    <button type="button" class="btn my-btn" data-toggle="modal" data-target="#apply-modal">apply now
                    </button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>Product Manneger</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aperiam harum officiis ullam Quia,
                        optio accusantium. Quas?</p>
                    <button type="button" class="btn my-btn" data-toggle="modal" data-target="#apply-modal">apply now
                    </button>
                </section>
            </div>
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>Sales Manneger</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aperiam harum officiis ullam Quia,
                        optio accusantium. Quas?</p>
                    <button type="button" class="btn my-btn" data-toggle="modal" data-target="#apply-modal">apply now
                    </button>
                </section>
            </div>
        </div>
    </div>
</section>
<!--careers section end-->
<!--Inquiry Forms Modal-->
<div class="modal fade" id="apply-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-h5">Job Apply Forms</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="#" class="my-form">
                    <div class="form-group form-heading">
                        <h2 class="form-h4">Share your Details</h2>
                    </div>
                    <div class="form-group form-group-row">
                        <div class="my-input">
                            <label for="name-1">Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" id="name-1">
                        </div>
                        <div class="my-input">
                            <label for="email-1">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email-1">
                        </div>
                        <div class="my-input">
                            <label for="phone-1">Phone Number</label>
                            <input type="number" class="form-control" placeholder="Phone Number" id="phone-1">
                        </div>
                    </div>
                    <div class="form-group form-group-row">
                        <div class="my-input">
                            <label for="exp-1">Total Experience</label>
                            <input type="text" class="form-control" placeholder="Total Experience" id="exp-1">
                        </div>
                        <div class="my-input">
                            <label for="Working">Working Status</label>
                            <select class="form-control working-status" name="Working" id="Working">
                                <option value="volvo">Currently Working</option>
                                <option value="saab">Not Working</option>
                            </select>
                        </div>
                        <div class="my-input">
                            <label for="myFile">Upload your CV</label>
                            <input type="file" class="form-control" id="myFile" name="filename">
                        </div>
                    </div>
                    <div class="form-group form-group-row">
                        <div class="my-input">
                            <label for="msg-1">Write Your messege</label>
                            <textarea class="form-control msg" placeholder="Write Your messege" rows="6"
                                      id="msg-1"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn my-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
