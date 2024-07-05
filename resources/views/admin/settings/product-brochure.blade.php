@extends('admin.layout.app')
@section('admincontent')
    <div class="container">
        <h3>Product Brochure</h3>
        <div class="row">
            <div class="col-md-12">
                <form id="brochureForm" method="POST">
                    <input type="hidden" id="brochureid" name="brochureid">
                    <div class="form-group">
                        <label for="image">Brochure File</label>
                        <input type="file" class="form-control" id="servicecardimage" accept="file/*" name="brochure" onchange="previewImage(event)">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="serviceCard()">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
               @if(isset($brochure) && $brochure->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Document</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($brochure as $bro)
                        <tr>
                            <td>{{$bro->brochure_id}}</td>
                            <td id="brochure-{{$bro->brochure_id}}"><a href="{{asset($bro->brochure_name)}}" target="blank">Click</a></td>
                            <td><button onclick="edit({{$bro->brochure_id}})"><i class="fa fa-edit"></i></button></td>
                            <td><button onclick="del({{$bro->brochure_id}})"><i class="fa fa-trash"></i></button></td>
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
    </div>

    <script>
        function serviceCard(){
            let URL = "{{route('brochure.submit')}}"
            let brochureForm = document.getElementById('brochureForm')
            let ourBrochure = new FormData(brochureForm)
            ourBrochure.append('_token',"{{ csrf_token() }}");
            // console.log(ourService.get('serviceimg1', 'serviceimg2'));
            formSubmit(URL, ourBrochure);
        }

        function edit(id){
            let brochure = document.getElementById('brochure-' + id).textContent;
            document.getElementById('servicecardimage').value = brochure;
        }

        function del(id){
            if(confirm("Are You Sure?") == true){
                let URL = "{{route('brochure.delete')}}/"+id;
                let CSRF = '{{ csrf_token() }}'
                deleteRecord(URL, CSRF);
            }
        }       

    </script>
@endsection