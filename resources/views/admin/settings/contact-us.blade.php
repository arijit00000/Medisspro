@extends('admin.layout.app')
@section('admincontent')

<div class="container mt-5">
    <h3>Segment Devid</h3>
    <div class="tab">
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'contactheading')">Head Line</button>
        <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'contactcontext')">Context</button>
    </div>

</div>

<div id="contactheading" class="container mt-5 tabcontent">
    <h3>Service Headline</h3>
    <div class="row">
        <div class="col-md-12">
            <form>

                @if(isset($headline))
                @foreach($headline as $sheadline)

                <input type="hidden" id="contactheadingid" value="{{$sheadline->id}}">

                <div class="form-group">
                    <label for="heading">Heading</label>  
                    <input type="text" class="form-control" id="contactmainheading" value="{{$sheadline->headline}}" placeholder="Enter heading">
                </div>
                <div class="form-group">
                    <label for="subheadline">Subheadline</label>
                    <textarea class="form-control" id="contactsubheadline" rows="5" placeholder="Enter subheadline">{{$sheadline->subheadline}}</textarea>
                </div>

                @endforeach
                @endif

                <button type="button" class="btn btn-primary" onclick="contactHeadline()">Submit</button>
            </form>
        </div>
    </div>
</div>

<div id="contactcontext" class="container mt-5 tabcontent">
    <h3>Context</h3>
    <div class="row">
        <div class="col-md-12">
            <form>

                @if(isset($context))
                @foreach($context as $sheadline)

                <input type="hidden" id="contactcontextid" value="{{$sheadline->id}}">

                <div class="form-group">
                    <label for="heading">Heading</label>  
                    <input type="text" class="form-control" id="contactcontextheadline" value="{{$sheadline->headline}}" placeholder="Enter heading">
                </div>
                <div class="form-group">
                    <label for="subheadline">Subheadline</label>
                    <textarea class="form-control" id="contactaboutcontext" rows="5" placeholder="Enter subheadline">{{$sheadline->subheadline}}</textarea>
                </div>

                @endforeach
                @endif

                <button type="button" class="btn btn-primary" onclick="contactContext()">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>

    function contactHeadline(){
        
        let contactheadingid = document.getElementById("contactheadingid").value;
        let contactmainheading = document.getElementById("contactmainheading").value;
        let contactsubheadline = document.getElementById("contactsubheadline").value;
        let URL = "{{route('settings.contact.heading')}}";
        
        headline_subheadline(contactheadingid ,contactmainheading, contactsubheadline, URL);
    }

    function contactContext(){
        
        let contactcontextid = document.getElementById("contactcontextid").value;
        let contactcontextheadline = document.getElementById("contactcontextheadline").value;
        let contactcontext = document.getElementById("contactaboutcontext").value;
        let URL = "{{route('settings.contact.context')}}";
        
        headline_subheadline(contactcontextid ,contactcontextheadline, contactcontext, URL);
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
</script>    

@endsection