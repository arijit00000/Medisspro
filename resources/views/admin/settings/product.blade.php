@extends('admin.layout.app')
@section('admincontent')
    <div class="container">
        <h3>Product</h3>
        <div class="row">
            <div class="col-md-12">
                <form id="serviceForm" method="POST">
                    <input type="hidden" id="serviceid" name="serviceid">
                    <div class="form-group">
                        <label for="image">Image 1</label>
                        <input type="file" class="form-control" id="servicecardimage" accept="image/*" name="serviceimg1" onchange="previewImage(event)">
                        <img class="imagepreview1" id="serviceimage1-preview" src="#" alt="Image Preview">
                    </div>
                    <div class="form-group">
                        <label for="image">Image 2</label>
                        <input type="file" class="form-control" id="servicecardimage" accept="image/*" name="serviceimg2" onchange="previewImage(event)">
                        <img class="imagepreview2" id="serviceimage2-preview" src="#" alt="Image Preview">
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
                @if(isset($product) && $product->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image 1</th>
                            <th scope="col">Image 2</th>
                            <th scope="col">Headline</th>
                            <th scope="col">Subheadline</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $pro)
                        <tr>
                            <td>{{$pro->product_id}}</td>
                            <td id="serviceImg1-{{$pro->product_id}}"><img src="{{asset($pro->product_img1)}}" class="multiimg" alt="Image Not Avaliable"></td>
                            <td id="serviceImg2-{{$pro->product_id}}"><img src="{{asset($pro->product_img2)}}" class="multiimg" alt="Image Not Avaliable"></td>
                            <td id="serviceHeading-{{$pro->product_id}}">{{$pro->product_name}}</td>
                            <td id="serviceContent-{{$pro->product_id}}">{{$pro->product_details}}</td>
                            <td><button onclick="edit({{$pro->product_id}})"><i class="fa fa-edit"></i></button></td>
                            <td><button onclick="del({{$pro->product_id}})"><i class="fa fa-trash"></i></button></td>
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
            let URL = "{{route('product.submit')}}"
            let serviceFrom = document.getElementById('serviceForm')
            let ourService = new FormData(serviceFrom)
            ourService.append('_token',"{{ csrf_token() }}");
            console.log(ourService.get('serviceimg1', 'serviceimg2'));
            formSubmit(URL, ourService);
        }

        function edit(id) {
            let serviceImage1 = document.getElementById('serviceImg1-' + id).querySelector('img').src;
            let serviceImage2 = document.getElementById('serviceImg2-' + id).querySelector('img').src;
            let serviceHeadline = document.getElementById('serviceHeading-' + id).textContent;
            let serviceContent = document.getElementById('serviceContent-' + id).textContent;

            let imagePreview1 = document.getElementById('serviceimage1-preview');
            imagePreview1.src = serviceImage1;
            imagePreview1.style.display = "block";

            let imagePreview2 = document.getElementById('serviceimage2-preview');
            imagePreview2.src = serviceImage2;
            imagePreview2.style.display = "block";

            document.getElementById('servicecardheading').value = serviceHeadline;
            document.getElementById('servicecardcontext').value = serviceContent;
            document.getElementById('serviceid').value = id;
        }

        function del(id){
            if(confirm("Are You Sure?") == true){
                let URL = "{{route('product.delete')}}/"+id;
                let CSRF = '{{ csrf_token() }}'
                deleteRecord(URL, CSRF);
            }
        }

    </script>
@endsection