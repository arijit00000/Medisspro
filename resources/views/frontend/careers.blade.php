@extends('frontend.layouts.app')
@section('frontend')
<!--top banner-->
<section class="top-banner">
    <div class="top-banner-text">
        <h1 class="banner-heading h2">Careers at <span class="highlight"><b>Medisspro</b></span></h1>
        @php
            $count = $careerdata->count()
        @endphp
        <h4 class="my-top-h4"><span>{{$count}}</span> Available Now</h4>
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
            @if(isset($careerdata))
            @foreach($careerdata as $career)
            <div class="col-md-4 col-lg-3 services-col" data-aos="fade-up" data-aos-duration="2400">
                <section class="services-card">
                    <h2>{{$career->career_name}}</h2>
                    <h3 class="card-name">Full Time</h3>
                    <p>{{$career->career_description}}</p>
                    <button type="button" onclick="submitCareer('{{$career->career_id}}','{{$career->career_name}}')">apply now
                    </button>
                </section>
            </div>
            @endforeach
            @endif
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
                <form action="#" class="my-form" id="jobForm">
                    <div class="form-group form-heading">
                        <h2 class="form-h4">Share your Details</h2>
                    </div>
                    <div class="my-input form-group form-group-row">
                        <input type="text" class="form-control" id="jobTitle" id="name-1" name="applyId" disabled>
                    </div>
                    <div class="form-group form-group-row">
                        <div class="my-input">
                            <label for="name-1">Full Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" id="name-1" name="applyName">
                        </div>
                        <div class="my-input">
                            <label for="email-1">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email-1" name="applyEmail">
                        </div>
                        <div class="my-input">
                            <label for="phone-1">Phone Number</label>
                            <input type="number" class="form-control" placeholder="Phone Number" id="phone-1" name="applyPhone">
                        </div>
                    </div>
                    <div class="form-group form-group-row">
                        <div class="my-input">
                            <label for="exp-1">Total Experience</label>
                            <input type="text" class="form-control" placeholder="Total Experience" id="exp-1" name="applyExp">
                        </div>
                        <div class="my-input">
                            <label for="Working">Working Status</label>
                            <select class="form-control working-status" name="Working" id="Working" name="applyWorking">
                                <option value="yes">Currently Working</option>
                                <option value="no">Not Working</option>
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
                                      id="msg-1" name="applyMessage"></textarea>
                        </div>
                    </div>
                    <button type="button" class="btn my-btn" id="submitJob">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function submitCareer(id, headline){
        $('#apply-modal').modal('show');
        $('#jobTitle').val(headline);
        
        $('#submitJob').on('click', function() {
            let URL = "{{route('career.apply')}}"
            let jobForm = document.getElementById('jobForm')
            let applyJob = new FormData(jobForm)
            applyJob.append('_token',"{{ csrf_token() }}")
            applyJob.append('applyId',id)

            formSubmit(URL, applyJob)
        })
    }
</script>
@endsection
