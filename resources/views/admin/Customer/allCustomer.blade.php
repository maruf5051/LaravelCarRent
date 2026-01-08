@extends('admin.master')

@section('admin')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Manage Customer</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customer Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Data Table</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            @php
                            $i=0;
                            @endphp
                            <thead>

                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>

                                    <th>Address</th>
                                    <th>Rental History</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Customers as $Customer)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$Customer->name}}</td>
                                    <td>{{$Customer->email }}</td>

                                    <td>{{$Customer->phone}}</td>
                                    <td>{{$Customer->address}}</td>


                                    <td><button class="btn btn-outline-success"><a href="{{route('history',$Customer->id)}}">View History</a></button></td>
                                    <td><a href="" class="btn btn-success">Delete</a></td>
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