@extends('admin.master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="btn btn-inverse-primary">Add Property</a></li>

        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Property Grid</h6>
                        <form class="forms-sample" method="POST" action="{{route('store.car')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Car Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Availability Status</label>
                                        <select name="availability" class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select Property</option>
                                            <option value="1">Available</option>
                                            <option value="0">Not Available</option>

                                        </select>
                                    </div>
                                </div>
                                <!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Brand</label>
                                        <input type="text" class="form-control" name="brand">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Year of Manufacture</label>
                                        <input type="number" class="form-control" name="year">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Car Image</label>
                                        <input type="file" class="form-control" name="image" onChange="mainthambUrl(this)">
                                        <img src="" id="maintham">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Model</label>
                                        <input type="text" class="form-control" name="model">
                                    </div>
                                </div>



                                <!-- Row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Daily Rent Price</label>
                                            <input type="text" name="daily_rent_price" class="form-control">
                                        </div>
                                        <!-- Col -->
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">Car Type</label>
                                            <input type="text" name="car_type" class="form-control">
                                        </div>
                                        <!-- Col -->
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary submit my-3">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>










<script>
    function mainthambUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#maintham').attr('src', e.target.result).width(80).height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }

    }
</script>


@endsection