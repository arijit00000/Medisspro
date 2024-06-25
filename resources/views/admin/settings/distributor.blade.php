@extends('admin.layout.app')
@section('admincontent')
    <div class="container mt-5">
        <h3>Segment Devid</h3>
        <div class="tab">
            <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'bannersection')">Distributor Headline</button>
            <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'listsection')">List</button>
            <button class="nav-btn btn-primary tablinks" onclick="openCity(event, 'imagesection')">Images</button>
        </div>
    </div>

    <!-- Banner Section -->
    <div id="bannersection" class="container mt-5 tabcontent">
        <h3>Distributor Headline</h3>
        <div class="row">
            <div class="col-md-12">
                <form id="distributorheadingForm" method="POST">
                    <input type="hidden" id="distributorid" name="distributorid">
                    <div class="form-group">
                        <label for="headline">Main Headline</label>
                        <input type="text" class="form-control" id="headline" value="" placeholder="Enter headline" name="heading">
                    </div>
                    <div class="form-group">
                        <label for="subheadline">Main Sub Headline</label>
                        <input type="text" class="form-control" id="subheadline" value="" placeholder="Enter sub headline" name="subheading">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="distributorHeading()">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if(isset($distributor) && $distributor->count() > 0)
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
                        @foreach($distributor as $distri)
                        <tr>
                            <td>{{$distri->distributorheading_id}}</td>
                            <td id="serviceHeading-{{$distri->distributorheading_id}}">{{$distri->distributor_headline}}</td>
                            <td id="serviceContent-{{$distri->distributorheading_id}}">{{$distri->	distributor_subheadline}}</td>
                            <td><button onclick="edit({{$distri->distributorheading_id}})"><i class="fa fa-edit"></i></button></td>
                            <td><button onclick="del({{$distri->distributorheading_id}})"><i class="fa fa-trash"></i></button></td>
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

    <!-- List Section -->
    <div id="listsection" class="container mt-5 tabcontent">
        <h3>List Section</h3>
        <div class="row">
            <div class="col-md-12">
                <form id="distributorlistForm" method="POST">
                    <input type="hidden" id="distributorlistid" name="distributorlistid">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="distributorlistimage" accept="image/*" name="distributorlistimage" onchange="previewImage(event)">
                        <img class="imagepreview" id="listimage-preview" src="#" alt="Image Preview">
                    </div>
                    <div class="form-group">
                        <label for="heading">Name</label>
                        <input type="text" class="form-control" id="distributorlistname" placeholder="Enter heading" name="distributorlistname">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="distributorList()">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if(isset($distributorlist) && $distributorlist->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Headline</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($distributorlist as $list)
                        <tr>
                            <td>{{$list->distribotorlist_id}}</td>
                            <td id="servicelistImg-{{$list->distribotorlist_id}}"><img src="{{asset($list->list_img)}}" class="multiimg" alt="Image Not Avaliable"></td>
                            <td id="servicelistHeading-{{$list->distribotorlist_id}}">{{$list->list_name}}</td>
                            <td><button onclick="editList({{$list->distribotorlist_id}})"><i class="fa fa-edit"></i></button></td>
                            <td><button onclick="delList({{$list->distribotorlist_id}})"><i class="fa fa-trash"></i></button></td>
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
    
    <!-- Image Section -->
    <div id="imagesection" class="container mt-5 tabcontent">
        <h3>Image Section</h3>
        <div class="row">
            <div class="col-md-12">
                <form id="distributorimgForm" method="POST">
                    <input type="hidden" id="distributorimgid" name="distributorimgid">
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="distributorimage" accept="image/*" name="distributorimage" onchange="previewImage(event)">
                        <img class="imagepreview" id="image-preview" src="#" alt="Image Preview">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="imageSubmit()">Submit</button>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                @if(isset($distributorimage) && $distributorimage->count() > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Edit</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($distributorimage as $image)
                        <tr>
                            <td>{{$image->distributorimg_id}}</td>
                            <td id="distributorImg-{{$image->distributorimg_id}}"><img src="{{asset($image->distributor_img)}}" class="multiimg" alt="Image Not Avaliable"></td>
                            <td><button onclick="editImage({{$image->distributorimg_id}})"><i class="fa fa-edit"></i></button></td>
                            <!-- <td><button onclick="delList()"><i class="fa fa-trash"></i></button></td> -->
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





    <!-- JS Slide -->
    <script>
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

    function distributorHeading(){
        let URL = "{{route('distributor.heading.submit')}}"
        let distributorFrom = document.getElementById('distributorheadingForm')
        let distributorHeading = new FormData(distributorFrom)
        distributorHeading.append('_token',"{{ csrf_token() }}");
        // console.log(ourService.get('serviceimg1', 'serviceimg2'));
        formSubmit(URL, distributorHeading);
    }

    function distributorList() {
        let URL = "{{ route('distributor.list.submit') }}";
        let distributorlistForm = document.getElementById('distributorlistForm');
        let formData = new FormData(distributorlistForm);
        formData.append('_token', "{{ csrf_token() }}");

        formSubmit(URL, formData);
    }

    function imageSubmit(){
        let URL = "{{ route('distributor.img.submit') }}";
        let distributorimgForm = document.getElementById('distributorimgForm');
        let distributorimageForm = new FormData(distributorimgForm);
        distributorimageForm.append('_token', "{{ csrf_token() }}");

        formSubmit(URL, distributorimageForm);
    }

    function edit(id){
        let serviceHeadline = document.getElementById('serviceHeading-'+id).textContent;
        let serviceContent = document.getElementById('serviceContent-'+id).textContent;

        document.getElementById('headline').value = serviceHeadline;
        document.getElementById('subheadline').value = serviceContent;
        document.getElementById('distributorid').value = id;
    }

    function editList(idi){
        let serviceHeadline = document.getElementById('servicelistImg-'+idi).querySelector('img').src;
        let serviceContent = document.getElementById('servicelistHeading-'+idi).textContent;

        let imagePreview = document.getElementById('image-preview');
            imagePreview.src = serviceHeadline;
            imagePreview.style.display = "block";

        document.getElementById('distributorlistid').value = idi;
    }

    function editImage(iddi) {
        let distributorImage = document.getElementById('distributorImg-' + iddi).querySelector('img').src;

        let imagePreview = document.getElementById('image-preview');
        imagePreview.src = distributorImage;
        imagePreview.style.display = "block";

        document.getElementById('distributorimgid').value = iddi;
    }

    function del(id){
        if(confirm("Are You Sure?") == true){
            let URL = "{{route('distributor.heading.delete')}}/"+id;
            let CSRF = '{{ csrf_token() }}'
            deleteRecord(URL, CSRF);
        }
    }

    function delList(idi){
        if(confirm("Are You Sure?") == true){
            let URL = "{{route('distributor.list.delete')}}/"+idi;
            let CSRF = '{{ csrf_token() }}'
            deleteRecord(URL, CSRF);
        }
    }
    
    </script>
@endsection