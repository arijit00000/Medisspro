@extends('admin.layout.app')
@section('admincontent')

<div class="container">
    <div class="row">
        <table class="table table-bordered">
            @if(isset($Contact) && $Contact->count() > 0)
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Service Headline</th>
                    <th scope="col">Inquire</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($Contact as $con)
                    <tr>
                        <td>{{$con->f_name}} {{$con->l_name}}</td>
                        <td>{{$con->email}}</td>
                        <td>{{$con->mobile}}</td>
                        @if(isset($con->addServiceCard))
                            <td>{{$con->addServiceCard->headline}}</td>
                        @else
                            <td></td>
                        @endif
                        <td>{{$con->inquire}}</td>
                    </tr>
                    @endforeach
                    {{$Contact->links()}}
                @else
                    <tr>
                        <td colspan="5" class="text-center">No Data Avaliable</td>
                    </tr>
            </tbody>
            @endif
        </table>
    </div>
</div>

@endsection