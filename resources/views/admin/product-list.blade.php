@extends('admin.layout.app')
@section('admincontent')
<div class="container">
    <div class="row">
        <div style="margin-top: 8px;">
            <!-- <form action="" method="GET">
                <div class="form-group search-div">
                    <input style="search-input" type="text" class="form-control" placeholder="Search" name="search" value="">
                    <button class="search-btn" type="submit">Search</button>
                    <button class="search-btn"><a href="">Clear</a></button>
                </div>
            </form> -->
        </div>
        @if(isset($productList) && $productList->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <!-- <th scope="col">Service Headline</th> -->
                    <th scope="col">Inquire</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($productList as $list)
                    <tr>
                        <td>{{$list->f_name}} {{$list->l_name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->mobile}}</td>
                        <!-- @if(isset($con->addServiceCard))
                            <td>{{$con->addServiceCard->headline}}</td>
                        @else
                            <td></td>
                        @endif -->
                        <td>{{$list->inquire}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <!-- <div>
            <p>showing <b></b> out of <b></b></p>
        </div> -->
        <!-- <div class="mt-3">
            <ul class="pagination">
               
                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                
                    <li class="page-item"><a class="page-link" href="" rel="prev">&laquo;</a></li>
                

                
                    
                        <li class="page-item active"><span class="page-link"></span></li>
                    
                        <li class="page-item"><a class="page-link" href=""></a></li>
                    
                

                
                    <li class="page-item"><a class="page-link" href="" rel="next">&raquo;</a></li>
                
                    <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                
            </ul> -->
        <!-- </div> -->
        
        <!-- <div class="nodata">
            No Data Avaliable
        </div> -->
        @endif
    </div>
</div>
@endsection