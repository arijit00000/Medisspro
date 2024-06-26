@extends('admin.layout.app')
@section('admincontent')
<?php
// echo"<pre>";
//     print_r($careerlist);

?>
<div class="container">
    <div class="row">
        @if(isset($careerlist) && $careerlist->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Status</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">CV</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($careerlist as $con)
                    <tr>
                        <td>{{$con->name}}</td>
                        <td>{{$con->email}}</td>
                        <td>{{$con->mobile}}</td>
                        <td>{{$con->experience}}</td>
                        <td>{{$con->status}}</td>
                        <td>{{$con->addCareer->career_name}}</td>
                        <td><a href="{{asset($con->doc)}}" target="_blank">Click</a></td>
                        <td>{{$con->message}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        @else
        <div class="nodata">
            No Data Avaliable
        </div>
        @endif
    </div>
</div>

@endsection