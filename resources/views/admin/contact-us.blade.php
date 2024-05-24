@extends('admin.layout.app')
@section('admincontent')

<div class="container">
    <div class="row">
        <div style="margin-top: 8px;">
            <form action="{{route('admin.contact')}}" method="GET">
                <div class="form-group search-div">
                    <input style="search-input" type="text" class="form-control" placeholder="Search" name="search" value="{{$search}}">
                    <button class="search-btn" type="submit">Search</button>
                    <button class="search-btn"><a href="{{route('admin.contact')}}">Clear</a></button>
                </div>
            </form>
        </div>
        @if(isset($Contact) && $Contact->count() > 0)
        <table class="table table-bordered">
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
            </tbody>
        </table>
        <div>
            <p>showing <b>{{$Contact->count()}}</b> out of <b>{{$Contact->total()}}</b></p>
        </div>
        <div class="mt-3">
            <ul class="pagination">
                @if ($Contact->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $Contact->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                @endif

                @foreach ($Contact->getUrlRange(1, $Contact->lastPage()) as $page => $url)
                    @if ($page == $Contact->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                @if ($Contact->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $Contact->nextPageUrl() }}" rel="next">&raquo;</a></li>
                @else
                    <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                @endif
            </ul>
        </div>
        @else
        <div class="nodata">
            No Data Avaliable
        </div>
        @endif
    </div>
</div>

@endsection