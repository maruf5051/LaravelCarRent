@extends('admin.master')

@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rental Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Table</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Booking Date</th>
                                    <th>Rental ID</th>
                                    <th>Name/Brand</th>
                                    <th>Model/Type</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Total Cost</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=1;
                                @endphp
                                @forelse($rentals as $rental)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$rental->created_at}}</td>
                                    <td>{{$rental->car_id}}</td>
                                    <td><b>Name: </b>{{$rental->car->name}}
                                        <br>
                                        <b> Brand:</b> {{$rental->car->brand}}
                                    </td>
                                    <td><b>Name: </b>{{$rental->car->model}}
                                        <br>
                                        <b> Brand:</b> {{$rental->car->car_type}}
                                    </td>
                                    <td>{{$rental->start_date}}</td>
                                    <td>{{$rental->end_date}}</td>
                                    <td>{{$rental->total_cost}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">No current bookings available.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection