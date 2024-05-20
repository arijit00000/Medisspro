@extends('admin.layout.app')
@section('admincontent')

<div class="container mt-5">
    <h3>Segment Devid</h3>
    <div class="tab">
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'bannersection')">Banner Section</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'topheading')">Top Heading</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'homeabout')">Home About</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'serviceheading')">Service Card Headline</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'servicecard')">Service Card</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'keyheading')">Key Achivement Headline</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'keyachivement')">Key Achivement</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'testimonialhead')">Testimonial Headline</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'gallaryhead')">Gallary Headline</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'gallary')">Gallary</button>
    </div>

</div>

<?php
    // echo"<pre>";
    // print_r($gallary);
?>

<!-- Banner Section -->
    <div id="bannersection" class="container mt-5 tabcontent">
        <h3>Banner Section</h3>
        <div class="row">
            <div class="col-md-12">
                <form>

                    @if(isset($banner))
                    @foreach($banner as $ban)

                    <input type="hidden" id="bannerid" value="{{$ban->id}}">

                    <div class="form-group">
                        <label for="banner1">Banner 1</label>
                        <input type="file" class="form-control" id="banner1" accept="image/*">
                        <img src="{{asset($ban->banner_img_1)}}" class="singleimg" alt="Banner 1 Not Fetch">
                    </div>
                    <div class="form-group">
                        <label for="banner2">Banner 2</label>
                        <input type="file" class="form-control" id="banner2" accept="image/*">
                        <img src="{{asset($ban->banner_img_2)}}" class="singleimg" alt="Banner 2 Not Fetch">
                    </div>
                    <div class="form-group">
                        <label for="headline">Headline</label>
                        <input type="text" class="form-control" id="headline" value="{{$ban->headline}}" placeholder="Enter headline">
                    </div>
                    <div class="form-group">
                        <label for="subheadline">Sub Headline</label>
                        <input type="text" class="form-control" id="subheadline" value="{{$ban->subheadline}}" placeholder="Enter sub headline">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" rows="5" placeholder="Enter content">{{$ban->content}}</textarea>
                    </div>

                    @endforeach
                    @endif

                    <button type="button" class="btn btn-primary" onclick="bannerSection()">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Top Heading -->
    <div id="topheading" class="container mt-5 tabcontent">
        <h3>Top Heading</h3>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <!-- First Set of Image, Headline, and Sub-headline -->
                    <div class="form-group">
                        <label for="image1">Image</label>
                        <input type="file" class="form-control" id="image1" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="headline1">Headline</label>
                        <input type="text" class="form-control" id="headline1" placeholder="Enter headline">
                    </div>
                    <div class="form-group">
                        <label for="subheadline1">Sub-headline</label>
                        <input type="text" class="form-control" id="subheadline1" placeholder="Enter sub-headline">
                    </div>

                    <button type="button" class="btn btn-primary" onclick="section2()">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if(isset($topheadline))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Headline</th>
                            <th scope="col">Subheadline</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($topheadline as $tophead)
                        <tr>
                            <th>{{$tophead->id}}</th>
                            <td><img src="{{asset($tophead->image)}}" class="multiimg" alt="Image Not Avaliable"></td>
                            <td>{{$tophead->headline}}</td>
                            <td>{{$tophead->subheadline}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

    <!-- Home About -->
    <div id="homeabout" class="container mt-5 tabcontent">
        <h3>Home About</h3>
        <div class="row">
            <div class="col-md-12">
                <form>

                    @if(isset($homeabout))
                    @foreach($homeabout as $habout)

                    <input type="hidden" id="homeaboutid" value="{{$habout->id}}">

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="homeaboutimage" accept="image/*">
                        <img src="{{asset($habout->image)}}" class="singleimg" alt="Does Not Fetch">
                    </div>
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" id="homeaboutheading" value="{{$habout->headline}}" placeholder="Enter heading">
                    </div>
                    <div class="form-group">
                        <label for="context">Context</label>
                        <textarea class="form-control" id="homeaboutcontext" rows="5" placeholder="Enter context">{{$habout->content}}</textarea>
                    </div>

                    @endforeach
                    @endif

                    <button type="button" class="btn btn-primary" onclick="aboutSection()">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Service Headline -->
    <div id="serviceheading" class="container mt-5 tabcontent">
        <h3>Service Headline</h3>
        <div class="row">
            <div class="col-md-12">
                <form>

                    @if(isset($serviceheadline))
                    @foreach($serviceheadline as $sheadline)

                    <input type="hidden" id="serviceheadingid" value="{{$sheadline->id}}">

                    <div class="form-group">
                        <label for="heading">Heading</label>  
                        <input type="text" class="form-control" id="servicemainheading" value="{{$sheadline->headline}}" placeholder="Enter heading">
                    </div>
                    <div class="form-group">
                        <label for="subheadline">Subheadline</label>
                        <textarea class="form-control" id="servicesubheadline" rows="5" placeholder="Enter subheadline">{{$sheadline->subheadline}}</textarea>
                    </div>

                    @endforeach
                    @endif

                    <button type="button" class="btn btn-primary" onclick="serviceHeadline()">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Service Card -->
    <div id="servicecard" class="container mt-5 tabcontent">
        <h3>Service Card</h3>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="servicecardimage" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" id="servicecardheading" placeholder="Enter heading">
                    </div>
                    <div class="form-group">
                        <label for="context">Context</label>
                        <textarea class="form-control" id="servicecardcontext" rows="5" placeholder="Enter context"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="serviceCard()">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if(isset($servicecard))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Headline</th>
                            <th scope="col">Subheadline</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($servicecard as $card)
                        <tr>
                            <th>{{$card->s_card_id}}</th>
                            <td><img src="{{asset($card->image)}}" class="multiimg" alt="Image Not Avaliable"></td>
                            <td>{{$card->headline}}</td>
                            <td>{{$card->content}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

    <!-- Key Achivement Headline -->
    <div id="keyheading" class="container mt-5 tabcontent">
        <h3>Key Achivement Headline</h3>
        <div class="row">
            <div class="col-md-12">
                <form>
                    
                    @if(isset($keyachivementheadline))
                    @foreach($keyachivementheadline as $keyheadline)

                    <input type="hidden" id="keyheadingid" value="{{$keyheadline->id}}">

                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" id="keyheading" value="{{$keyheadline->headline}}" placeholder="Enter heading">
                    </div>
                    <div class="form-group">
                        <label for="subheadline">Subheadline</label>
                        <textarea class="form-control" id="keyheadline" rows="5" placeholder="Enter subheadline">{{$keyheadline->subheadline}}</textarea>
                    </div>

                    @endforeach
                    @endif

                    <button type="button" class="btn btn-primary" onclick="keyAchivementHeadline()">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Key Achivement -->
    <div id="keyachivement" class="container mt-5 tabcontent">
        <h3>Key Achivements</h3>
        <div class="row">
            <div class="col-md-12">
                <form>

                    @if(isset($keyachivement))
                    @foreach($keyachivement as $keyachive)

                    <input type="hidden" id="keyachiveid" value="{{$keyachive->id}}">

                    <!-- Heading 1 -->
                    <div class="form-group">
                        <label for="keyheading1">Heading 1</label>
                        <input type="text" class="form-control" id="keyheading1" value="{{$keyachive->heading_1}}" placeholder="Enter heading 1">
                    </div>
                    <!-- Subheading 1 -->
                    <div class="form-group">
                        <label for="keysubheading1">Subheading 1</label>
                        <input type="text" class="form-control" id="keysubheading1" value="{{$keyachive->subheading_1}}" placeholder="Enter subheading 1">
                    </div>
                    <!-- Heading 2 -->
                    <div class="form-group">
                        <label for="keyheading2">Heading 2</label>
                        <input type="text" class="form-control" id="keyheading2" value="{{$keyachive->heading_2}}" placeholder="Enter heading 2">
                    </div>
                    <!-- Subheading 2 -->
                    <div class="form-group">
                        <label for="keysubheading2">Subheading 2</label>
                        <input type="text" class="form-control" id="keysubheading2" value="{{$keyachive->subheading_2}}" placeholder="Enter subheading 2">
                    </div>
                    <!-- Image -->
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="keyimage" accept="image/*">
                        <img src="{{asset($keyachive->image)}}" class="singleimg" alt="Image IS Not Fetch">
                    </div>
                    <!-- Heading 3 -->
                    <div class="form-group">
                        <label for="keyheading3">Heading 3</label>
                        <input type="text" class="form-control" id="keyheading3" value="{{$keyachive->heading_3}}" placeholder="Enter heading 3">
                    </div>
                    <!-- Subheading 3 -->
                    <div class="form-group">
                        <label for="keysubheading3">Subheading 3</label>
                        <input type="text" class="form-control" id="keysubheading3" value="{{$keyachive->subheading_3}}" placeholder="Enter subheading 3">
                    </div>
                    <!-- Heading 4 -->
                    <div class="form-group">
                        <label for="keyheading4">Heading 4</label>
                        <input type="text" class="form-control" id="keyheading4" value="{{$keyachive->heading_4}}" placeholder="Enter heading 4">
                    </div>
                    <!-- Subheading 4 -->
                    <div class="form-group">
                        <label for="subheading4">Subheading 4</label>
                        <input type="text" class="form-control" id="keysubheading4" value="{{$keyachive->subheading_4}}" placeholder="Enter subheading 4">
                    </div>

                    @endforeach
                    @endif

                    <button type="button" class="btn btn-primary" onclick="keyAchivement()">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Testimonial Headline -->
    <div id="testimonialhead" class="container mt-5 tabcontent">
        <h3>Testimonial Headline</h3>
        <div class="row">
            <div class="col-md-12">
                <form>

                    @if(isset($testimonialheadline))
                    @foreach($testimonialheadline as $testhead)

                    <input type="hidden" id="testimonialheadingid" value="{{$testhead->id}}">

                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" id="testimonialheading" value="{{$testhead->headline}}" placeholder="Enter heading">
                    </div>
                    <div class="form-group">
                        <label for="subheadline">Subheadline</label>
                        <textarea class="form-control" id="testimonialheadline" rows="5" placeholder="Enter subheadline">{{$testhead->subheadline}}</textarea>
                    </div>

                    @endforeach
                    @endif

                    <button type="button" class="btn btn-primary" onclick="testimonialHeadline()">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Gallary Headline -->
    <div id="gallaryhead" class="container mt-5 tabcontent">
        <h3>Gallary Headline</h3>
        <div class="row">
            <div class="col-md-12">
                <form>

                    @if(isset($gallaryheadline))
                    @foreach($gallaryheadline as $gallaryhead)

                    <input type="hidden" id="gallaryheadingid" value="{{$gallaryhead->id}}">

                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" id="gallaryheading" value="{{$gallaryhead->headline}}" placeholder="Enter heading">
                    </div>
                    <div class="form-group">
                        <label for="subheadline">Subheadline</label>
                        <textarea class="form-control" id="gallaryheadline" rows="5" placeholder="Enter subheadline">{{$gallaryhead->subheadline}}</textarea>
                    </div>

                    @endforeach
                    @endif
                    
                    <button type="button" class="btn btn-primary" onclick="gallaryHeadline()">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Gallary Photo -->
    <div id="gallary" class="container mt-5 tabcontent">
        <h3>Gallary Section</h3>
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label for="gallary1">Gallary Image</label>
                        <input type="file" class="form-control" id="gallary1" accept="image/*">
                        <img src="" class="singleimg" alt="Arijit">
                    </div>

                    <button type="button" class="btn btn-primary" onclick="gallarySection()">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if(isset($gallary))
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($gallary as $gal)
                        <tr>
                            <th>{{$gal->id}}</th>
                            <td><img src="{{asset($gal->gallary_img)}}" class="multiimg" alt="Image Not Avaliable"></td>
                            <td><i></i><button onclick="showImg({{$gal->id}})">Edit</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>


<script>
    function bannerSection(){
        let id = document.getElementById("bannerid").value;
        let banner1 = document.getElementById("banner1").files[0];
        let banner2 = document.getElementById("banner2").files[0];
        let headline = document.getElementById("headline").value;
        let subheadline = document.getElementById("subheadline").value;
        let content = document.getElementById("content").value;

        let formData = new FormData();
        formData.append('bannerid',id);
        formData.append('banner1',banner1);
        formData.append('banner2',banner2);
        formData.append('headline',headline);
        formData.append('subheadline',subheadline);
        formData.append('content',content);
        formData.append('_token',"{{ csrf_token() }}");

        $.ajax({
            type:'POST',
            url:"{{route('banner.submit')}}",
            data:formData,
            contentType:false,
            processData: false,
            success: function(response){
                if(response.success){
                    Swal.fire({
                    icon:"success",
                    title: "Great",
                    text: "Record Successfully Update",
                    confirmButtonText:"Ok"
                    })
                }
                else{
                    Swal.fire({
                    icon:"error",
                    title: "Oops...",
                    text: "Wait For Sometime",
                    confirmButtonText:"Ok"
                    })
                }
            },
            error: function ( xhr, status, error) {
                //  let msg = xhr.responseJSON && xhr.responseJSON.message && xhr.responseJSON.message.length>0?xhr.responseJSON.message:"Somethinf went wrong"
                Swal.fire({
                    icon:"error",
                    title:"error",
                    text:"Something Went Wrong", // dynamic error...
                    confirmButtonText:"Ok"
                })
            }
        })
    }

    function section2(){
        let image1 = document.getElementById("image1").files[0];
        let headline1 = document.getElementById("headline1").value;
        let subheadline1 = document.getElementById("subheadline1").value;
        let URL = "{{route('topheading.submit')}}";

        imgHeadContext(image1, headline1, subheadline1, URL);
    }

    function aboutSection(){
        let homeaboutid = document.getElementById("homeaboutid").value;
        let aboutimage = document.getElementById("homeaboutimage").files[0];
        let aboutheading = document.getElementById("homeaboutheading").value;
        let aboutcontext = document.getElementById("homeaboutcontext").value;

        let formData = new FormData();
        formData.append('id',homeaboutid);
        formData.append('image',aboutimage);
        formData.append('heading',aboutheading);
        formData.append('context',aboutcontext);
        formData.append('_token',"{{ csrf_token() }}");

        $.ajax({
            type:'POST',
            url:"{{route('about.submit')}}",
            data:formData,
            contentType:false,
            processData: false,
            success: function(response){
                if(response.success){
                    Swal.fire({
                    icon:"success",
                    title: "Great",
                    text: "Record Successfully Update",
                    confirmButtonText:"Ok"
                    })
                }
                else{
                    Swal.fire({
                    icon:"error",
                    title: "Oops...",
                    text: "Wait For Sometime",
                    confirmButtonText:"Ok"
                    })
                }
            },
            error: function ( xhr, status, error) {
                //  let msg = xhr.responseJSON && xhr.responseJSON.message && xhr.responseJSON.message.length>0?xhr.responseJSON.message:"Somethinf went wrong"
                Swal.fire({
                    icon:"error",
                    title:"error",
                    text:"Something Went Wrong", // dynamic error...
                    confirmButtonText:"Ok"
                })
            }
        })
    }

    function serviceHeadline(){
        
        let serviceheadingid = document.getElementById("serviceheadingid").value;
        let servicemainheading = document.getElementById("servicemainheading").value;
        let servicesubheadline = document.getElementById("servicesubheadline").value;
        let URL = "{{route('service.headline.submit')}}";
        
        headline_subheadline(serviceheadingid ,servicemainheading, servicesubheadline, URL);
    }

    function serviceCard(){
        let servicecardimage = document.getElementById("servicecardimage").files[0];
        let servicecardheading = document.getElementById("servicecardheading").value;
        let servicecardcontext = document.getElementById("servicecardcontext").value;
        let URL = "{{route('service.card.submit')}}";

        imgHeadContext(servicecardimage, servicecardheading, servicecardcontext, URL);
    }

    function keyAchivementHeadline(){
        let keyheadingid = document.getElementById("keyheadingid").value;
        let keyheading = document.getElementById("keyheading").value;
        let keyheadline = document.getElementById("keyheadline").value;
        let URL = "{{route('key.headline.submit')}}";

        headline_subheadline(keyheadingid, keyheading, keyheadline, URL);
    }

    function keyAchivement(){

        let keyachiveid = document.getElementById("keyachiveid").value;
        let keyheading1 = document.getElementById("keyheading1").value;
        let keysubheading1 = document.getElementById("keysubheading1").value;
        let keyheading2 = document.getElementById("keyheading2").value;
        let keysubheading2 = document.getElementById("keysubheading2").value;
        let keyimage = document.getElementById("keyimage").files[0];
        let keyheading3 = document.getElementById("keyheading3").value;
        let keysubheading3 = document.getElementById("keysubheading3").value;
        let keyheading4 = document.getElementById("keyheading4").value;
        let keysubheading4 = document.getElementById("keysubheading4").value;

        let formData = new FormData();
        formData.append('keyachiveid',keyachiveid);
        formData.append('keyheading1',keyheading1);
        formData.append('keysubheading1',keysubheading1);
        formData.append('keyheading2',keyheading2);
        formData.append('keysubheading2',keysubheading2);
        formData.append('keyimage',keyimage);
        formData.append('keyheading3',keyheading3);
        formData.append('keysubheading3',keysubheading3);
        formData.append('keyheading4',keyheading4);
        formData.append('keysubheading4',keysubheading4);
        formData.append('_token',"{{ csrf_token() }}");

        $.ajax({
            type:'POST',
            url:"{{route('keyachivement.submit')}}",
            data:formData,
            contentType:false,
            processData: false,
            success: function(response){
                if(response.success){
                    Swal.fire({
                    icon:"success",
                    title: "Great",
                    text: "Record Successfully Update",
                    confirmButtonText:"Ok"
                    })
                }
                else{
                    Swal.fire({
                    icon:"error",
                    title: "Oops...",
                    text: "Wait For Sometime",
                    confirmButtonText:"Ok"
                    })
                }
            },
            error: function ( xhr, status, error) {
                //  let msg = xhr.responseJSON && xhr.responseJSON.message && xhr.responseJSON.message.length>0?xhr.responseJSON.message:"Somethinf went wrong"
                Swal.fire({
                    icon:"error",
                    title:"error",
                    text:"Something Went Wrong", // dynamic error...
                    confirmButtonText:"Ok"
                })
            }
        })
    }

    function testimonialHeadline(){
        let testimonialheadingid = document.getElementById("testimonialheadingid").value;
        let testimonialheading = document.getElementById("testimonialheading").value;
        let testimonialheadline = document.getElementById("testimonialheadline").value;
        let URL = "{{route('testimonial.headline.submit')}}";

        headline_subheadline(testimonialheadingid, testimonialheading, testimonialheadline, URL);
    }

    function gallaryHeadline(){
        let gallaryheadingid = document.getElementById("gallaryheadingid").value;
        let gallaryheading = document.getElementById("gallaryheading").value;
        let gallaryheadline = document.getElementById("gallaryheadline").value;
        let URL = "{{route('gallary.headline.submit')}}";

        headline_subheadline(gallaryheadingid, gallaryheading, gallaryheadline, URL);
    }

    function gallarySection(){
        let gallary1 = document.getElementById("gallary1").files[0];
        
        let formData = new FormData();
        formData.append('gallary1',gallary1);
        formData.append('_token',"{{ csrf_token() }}");

        $.ajax({
            type:'POST',
            url:"{{route('gallary.submit')}}",
            data:formData,
            contentType:false,
            processData: false,
            success: function(response){
                if(response.success){
                    Swal.fire({
                    icon:"success",
                    title: "Great",
                    text: "Record Successfully Update",
                    confirmButtonText:"Ok"
                    })
                }
                else{
                    Swal.fire({
                    icon:"error",
                    title: "Oops...",
                    text: "Wait For Sometime",
                    confirmButtonText:"Ok"
                    })
                }
            },
            error: function ( xhr, status, error) {
                //  let msg = xhr.responseJSON && xhr.responseJSON.message && xhr.responseJSON.message.length>0?xhr.responseJSON.message:"Somethinf went wrong"
                Swal.fire({
                    icon:"error",
                    title:"error",
                    text:"Something Went Wrong", // dynamic error...
                    confirmButtonText:"Ok"
                })
            }
        })
    }

    // Common Function

    function headline_subheadline(id, heading, subheadline, URL){

        let formData = new FormData();
        formData.append('id',id);
        formData.append('heading',heading);
        formData.append('subheadline',subheadline);
        formData.append('_token',"{{ csrf_token() }}");

        $.ajax({
            type:'POST',
            url:URL,
            data:formData,
            contentType:false,
            processData: false,
            success: function(response){
                if(response.success){
                    Swal.fire({
                    icon:"success",
                    title: "Great",
                    text: "Record Successfully Update",
                    confirmButtonText:"Ok"
                    })
                }
                else{
                    Swal.fire({
                    icon:"error",
                    title: "Oops...",
                    text: "Wait For Sometime",
                    confirmButtonText:"Ok"
                    })
                }
            },
            error: function ( xhr, status, error) {
                //  let msg = xhr.responseJSON && xhr.responseJSON.message && xhr.responseJSON.message.length>0?xhr.responseJSON.message:"Somethinf went wrong"
                Swal.fire({
                    icon:"error",
                    title:"error",
                    text:"Something Went Wrong", // dynamic error...
                    confirmButtonText:"Ok"
                })
            }
        })
    }

    function imgHeadContext(image, heading, context, URL){

        let formData = new FormData();
        formData.append('image',image);
        formData.append('heading',heading);
        formData.append('context',context);
        formData.append('_token',"{{ csrf_token() }}");

        $.ajax({
            type:'POST',
            url:URL,
            data:formData,
            contentType:false,
            processData: false,
            success: function(response){
                if(response.success){
                    Swal.fire({
                    icon:"success",
                    title: "Great",
                    text: "Record Successfully Update",
                    confirmButtonText:"Ok"
                    })
                }
                else{
                    Swal.fire({
                    icon:"error",
                    title: "Oops...",
                    text: "Wait For Sometime",
                    confirmButtonText:"Ok"
                    })
                }
            },
            error: function ( xhr, status, error) {
                //  let msg = xhr.responseJSON && xhr.responseJSON.message && xhr.responseJSON.message.length>0?xhr.responseJSON.message:"Somethinf went wrong"
                Swal.fire({
                    icon:"error",
                    title:"error",
                    text:"Something Went Wrong", // dynamic error...
                    confirmButtonText:"Ok"
                })
            }
        })
    }

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
        tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
        document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
    }

    function showImg(id) {
        
        console.log(id);
    }


</script>
@endsection