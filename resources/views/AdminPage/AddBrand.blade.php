@extends('layout.adminlayout')
@section('content')


<!-- heading -->
<div id="form_container">


    <form action="{{route('save_Brand')}}" class="shadow" method="post" enctype="multipart/form-data"
        style="padding: 15px 30px 30px 30px;">
        @csrf
        <div class="d-flex" style="justify-content: space-between;">
            <h3>Add Brand</h3>
            <ion-icon name="close" id="close_btn" style="color: red; font-size:25px"></ion-icon>
        </div>
        <div class="mb-3">
            <label for="Brand-Name" class="form-label">Brand Name:</label>
            <input type="text" class="form-control" id="brand_name" name="Brand_Name">
            <span style="color: red;"> @error('Brand_Name'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="Brand-Image" class="form-label">Brand Image:</label>
            <input type="file" class="form-control" id="brand_img" name="Brand_Img">
            <span style="color: red;"> @error('Brand_Img'){{$message}}@enderror</span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<div class=" container p-5" id="table_container">
    @if(session('status'))
    <div class="message alert alert-success" role="alert" id="statusMessage">
        {{session('status')}}
    </div>
    @elseif(session('fail'))
    <div class="message alert alert-fail" role="alert" id="statusMessage">
        {{session('fail')}}
    </div>
    @endif
    <div class="brand_table shadow" style="padding: 15px 30px 30px 30px;">
        <div class="brand_heading d-flex " style="justify-content: space-between;padding-bottom: 16px;">
            <h3>Brand</h3>
            <button class="btn btn-primary" id="btn_form" onclick="showForm();">
                Add Brand
            </button>
        </div>

        <table class="table " id="table">
            <thead class="table-secondary">
                <th>Sn.</th>
                <th>Brand Image</th>
                <th>Brand Name</th>
                <th colspan="2">Action</th>
            </thead>
            <?php $i=1;?>
            @foreach($BrandData as $Brand)
            <tbody>
                <tr>
                    <td>{{$i++}}</td>
                    <td><img src="{{asset('storage/'.$Brand->Brand_Img)}}" alt="" style="height: 50px;" /></td>
                    <td>{{$Brand->Brand_Name}}</td>
                    <td><a href="{{url('Delete-Brand/'.$Brand->id)}}"
                            style="color: black;font-size:23px;margin-left:10px;">
                            <ion-icon name="trash-outline"></ion-icon>
                        </a></td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>

</div>

@endsection

<script>
document.addEventListener("DOMContentLoaded", function() {
    btn_form
    var formContainer = document.getElementById('form_container');
    var tableContainer = document.getElementById('table_container');
    var btn_form = document.getElementById('btn_form');
    var close_btn = document.getElementById('close_btn');


    btn_form.addEventListener('click', function() {
        if (formContainer && tableContainer) {
            formContainer.style.display = 'block';
            tableContainer.style.filter = 'blur(8px)';
        }
    });
    close_btn.addEventListener('click', function() {
        if (formContainer && tableContainer) {
            formContainer.style.display = 'none';
            tableContainer.style.filter = 'blur(0px)';
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var status_msg = document.getElementById('statusMessage');
    if (statusMessage) {
        setTimeout(function() {
            statusMessage.style.display = 'none';
        }, 3000);
    }
})
</script>