@extends('admin.layout.app')
@section('admincontent')

<div class="container">
    <h3>Contact Information Form</h3>

    <form action="{{route('settings.homeheader.submit')}}" method="POST">
        @csrf
        @if(isset($data))
        @foreach($data as $da)

        <div class="row">
            <div>
                <input type="hidden" id="id" value="{{$da->headerfooter_id}}" name="id">

                <!-- Facebook link -->
                <div class="form-group col-md-6">
                    <label for="facebook">Facebook Link</label>
                    <input type="text" class="form-control" id="facebook" value="{{$da->facebook}}" name="facebook" placeholder="Enter Facebook link">
                </div>

                <!-- LinkedIn link -->
                <div class="form-group col-md-6">
                    <label for="linkedin">LinkedIn Link</label>
                    <input type="text" class="form-control" id="linkedin" value="{{$da->linkdin}}" name="linkdin" placeholder="Enter LinkedIn link">
                </div>

                <!-- Instagram link -->
                <div class="form-group col-md-6">
                    <label for="instagram">Instagram Link</label>
                    <input type="text" class="form-control" id="instagram" value="{{$da->instagram}}" name="instragram" placeholder="Enter Instagram link">
                </div>

                <!-- Twitter link -->
                <div class="form-group col-md-6">
                    <label for="twitter">Twitter Link</label>
                    <input type="text" class="form-control" id="twitter" value="{{$da->twitter}}" name="twitter" placeholder="Enter Twitter link">
                </div>

                <!-- Mobile number -->
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" value="{{$da->mobile}}" name="mobile" placeholder="Enter Mobile number">
                </div>

                <!-- Email address -->
                <div class="form-group col-md-6">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" value="{{$da->email}}" name="email" placeholder="Enter Email address">
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Home address -->
            <div class="form-group col-md-12">
                <label for="homeAddress">Corporate Office</label>
                <textarea class="form-control" id="homeAddress" name="corporateoffice" rows="3" placeholder="Enter Home address">{{$da->corporate_office}}</textarea>
            </div>
        </div>
        <div class="row">
            <!-- Office address -->
            <div class="form-group col-md-12">
                <label for="officeAddress">Branch Office</label>
                <textarea class="form-control" id="officeAddress" name="branchoffice" rows="3" placeholder="Enter Office address">{{implode(', ',$da->branch_office)}}</textarea>
            </div>
        </div>
        <div class="row">
            <!-- Website -->
            <div class="form-group col-md-12">
                <label for="website">Website</label>
                <input type="text" class="form-control" id="website" value="{{$da->web}}" name="website" placeholder="Enter Website link">
            </div>
        </div>
        <div class="row">
            <!-- Footer Text -->
            <div class="form-group col-md-12">
                <label for="footerText">Footer Text</label>
                <textarea class="form-control" id="footertext" name="footertext" rows="3" placeholder="Enter Footer text">{{$da->footer_text}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        @endforeach
        @endif
    </form>
</div>

@endsection