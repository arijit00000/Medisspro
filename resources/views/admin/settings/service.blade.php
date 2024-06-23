@extends('admin.layout.app')
@section('admincontent')
    <div class="container">
        <h3>Service Card</h3>
        <div class="row">
            <div class="col-md-12">
                <form id="serviceForm" method="POST">
                    <input type="hidden" id="serviceid" name="serviceid">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="servicecardimage" accept="image/*" name="serviceimg" onchange="previewImage(event)">
                        <img class="imagepreview" id="serviceimage-preview" src="#" alt="Image Preview">
                    </div>
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
                @if(isset($service) && $service->count() > 0)
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
                        @foreach($service as $card)
                        <tr>
                            <td>{{$card->s_card_id}}</td>
                            <td id="serviceImg-{{$card->s_card_id}}"><img src="{{asset($card->service_img)}}" class="multiimg" alt="Image Not Avaliable"></td>
                            <td id="serviceHeading-{{$card->s_card_id}}">{{$card->service_headline}}</td>
                            <td id="serviceContent-{{$card->s_card_id}}">{{$card->service_content}}</td>
                            <td><button onclick="edit({{$card->s_card_id}})"><i class="fa fa-edit"></i></button></td>
                            <td><button onclick="del({{$card->s_card_id}})"><i class="fa fa-trash"></i></button></td>
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
    <!-- Js Form Submission -->
    <script>
        function serviceCard(){
            let URL = "{{route('service.submit')}}"
            let serviceFrom = document.getElementById('serviceForm')
            let ourService = new FormData(serviceFrom)
            ourService.append('_token',"{{ csrf_token() }}");
            // console.log(ourService.get('serviceheading'));
            formSubmit(URL, ourService);
        }

        function edit(id){
            let serviceImage = document.getElementById('serviceImg-'+id).querySelector('img').src;
            let serviceHeadline = document.getElementById('serviceHeading-'+id).textContent;
            let serviceContent = document.getElementById('serviceContent-'+id).textContent;

            let imagePreview = document.getElementById('serviceimage-preview');
            imagePreview.src = serviceImage;
            imagePreview.style.display = "block";

            document.getElementById('servicecardheading').value = serviceHeadline;
            document.getElementById('servicecardcontext').value = serviceContent;
            document.getElementById('serviceid').value = id;
        }

        function previewImage(event) {
            // Display the chosen image as a preview
            let imagePreview = document.getElementById('serviceimage-preview');
            imagePreview.src = URL.createObjectURL(event.target.files[0]);
            imagePreview.style.display = "block";
        }

        function del(id){
            if(confirm("Are You Sure?") == true){
                let URL = "{{route('service.delete')}}/"+id;
                let CSRF = '{{ csrf_token() }}'
                deleteRecord(URL, CSRF);
            }
        }
    </script>
@endsection
