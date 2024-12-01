@extends('frontend.master')


@section('frontend')

@include('frontend.layout.profileTitle')
<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-details sec-pad-2">
    <div class="auto-container">
        <div class="row clearfix">









            @include('frontend.layout.profileSidebar')




            <div class="col-lg-8 col-md-12 col-sm-12 content-side">

                <div class="container my-4">
                    <h2 class="text-center">Current Bookings</h2>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Car ID</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Total Cost</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($currentBookings as $booking)
                            <tr>
                                <td>{{ $booking->car->id }}</td>
                                <td>{{ $booking->car->brand }}</td>
                                <td>{{ $booking->car->model }}</td>
                                <td>{{ $booking->start_date }}</td>
                                <td>{{ $booking->end_date }}</td>
                                <td>${{ $booking->total_cost }}</td>
                                <td>
                                    @if(\Carbon\Carbon::parse($booking->start_date)->isFuture())
                                    <!-- Delete button only if the booking is in the future -->

                                    <button class="btn btn-danger btn-sm text-white"><a href="{{ route('booking.delete', $booking->id) }}">Delete</a></button>

                                    @else
                                    <span class="text-muted">Cannot delete</span>
                                    @endif
                                </td>
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
</section>
<!-- sidebar-page-container -->

<!-- subscribe-section -->
<section class="subscribe-section bg-color-3">
    <div class="pattern-layer" style="background-image: url({{asset('frontend')}}/images/shape/shape-2.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                <div class="text">
                    <span>Subscribe</span>
                    <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                <div class="form-inner">
                    <form action="contact.html" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter your email" required="">
                            <button type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subscribe-section end -->
@endsection