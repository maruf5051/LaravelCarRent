@extends('admin.master')

@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Car Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Table</h6>
                    @php
                    $i=1;
                    @endphp
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Year</th>
                                    <th>Daily Rent Price</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cars as $car)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$car->name}}</td>
                                    <td>{{$car->brand}}</td>
                                    <td>{{$car->model}}</td>
                                    <td>{{$car->year}}</td>
                                    <td>{{$car->daily_rent_price}}</td>

                                    <td> @if($car->availability==1)
                                        <div class="buy-btn pull-right"><a href="property-details.html">Available</a></div>
                                        @else
                                        <div class="buy-btn pull-right"><a href="property-details.html">Not Available</a></div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('delete.car',$car->id)}}" class="btn btn-danger">Delate</a>
                                        <a href="{{route('edit.car',$car->id)}}" class="btn btn-success">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection