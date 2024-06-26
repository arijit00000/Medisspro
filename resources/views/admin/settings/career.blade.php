@extends('admin.layout.app')
@section('admincontent')
    <div class="container">
        <h3>Career</h3>
        <div class="row">
            <div class="col-md-12">
                <form id="serviceForm" method="POST">
                    <input type="hidden" id="serviceid" name="serviceid">
                    <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" id="servicecardheading" placeholder="Enter heading" name="serviceheading">
                    </div>
                    <div class="form-group">
                        <label for="context">Context</label>
                        <textarea class="form-control" id="servicecardcontext" rows="5" placeholder="Enter context" name="servicecontent"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="serviceCard()">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if(isset($careerdata) && $careerdata->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Headline</th>
                            <th scope="col">Subheadline</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($careerdata as $career)
                        <tr>
                            <td>{{$career->career_id}}</td>
                            <td id="serviceHeading-{{$career->career_id}}">{{$career->career_name}}</td>
                            <td id="serviceContent-{{$career->career_id}}">{{$career->career_description}}</td>
                            <td><button onclick="edit({{$career->career_id}})"><i class="fa fa-edit"></i></button></td>
                            <td><button onclick="del({{$career->career_id}})"><i class="fa fa-trash"></i></button></td>
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

        <!-- JS Script -->
        <script>

        function serviceCard(){
            let URL = "{{route('career.submit')}}"
            let serviceFrom = document.getElementById('serviceForm')
            let ourService = new FormData(serviceFrom)
            ourService.append('_token',"{{ csrf_token() }}");
            // console.log(ourService.get('serviceimg1', 'serviceimg2'));
            console.log(URL);
            formSubmit(URL, ourService);
        }

        function edit(id) {
            let serviceHeadline = document.getElementById('serviceHeading-' + id).textContent;
            let serviceContent = document.getElementById('serviceContent-' + id).textContent;

            document.getElementById('servicecardheading').value = serviceHeadline;
            document.getElementById('servicecardcontext').value = serviceContent;
            document.getElementById('serviceid').value = id;
        }

        function del(id){
            if(confirm("Are You Sure?") == true){
                let URL = "{{route('career.delete')}}/"+id;
                let CSRF = '{{ csrf_token() }}'
                deleteRecord(URL, CSRF);
            }
        }
        </script>
@endsection