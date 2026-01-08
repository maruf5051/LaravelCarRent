@extends('frontend.master')


@section('frontend')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--Page Title-->
<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Car Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Car Details</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- property-details -->
<section class="property-details property-details-one">
    <div class="auto-container">
        <div class="top-details clearfix">
            <div class="left-column pull-left clearfix">
                <h3>{{$car->name}}</h3>
                <div class="author-info clearfix">
                    <div class="author-box pull-left">
                        <figure class="author-thumb"><img src="{{ asset('frontend/images/profile1.jpg') }}" alt="Author Profile"></figure>
                        <h6>Admin</h6>
                    </div>

                    <ul class="rating clearfix pull-left">
                        <li><i class="icon-39"></i></li>
                        <li><i class="icon-39"></i></li>
                        <li><i class="icon-39"></i></li>
                        <li><i class="icon-39"></i></li>
                        <li><i class="icon-40"></i></li>
                    </ul>
                </div>
            </div>
            <div class="right-column pull-right clearfix">
                <div class="price-inner clearfix">
                    <ul class="category clearfix pull-left">
                        @if($car->availability===1)
                        <div class="buy-btn pull-right"><a href="property-details.html">Available</a></div>
                        @else
                        <div class="buy-btn pull-right"><a href="property-details.html">Not Available</a></div>
                        @endif
                    </ul>
                    <div class="price-box pull-right">
                        <h3>${{$car->daily_rent_price}}</h3>
                    </div>
                </div>

            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-10 col-md-12 col-sm-12 content-side offset-1">
                <div class="property-details-content">
                    <div class="carousel-inner">
                        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
                            <figure class="image-box"><img src="{{asset($car->image)}}" alt=""></figure>

                        </div>
                    </div>

                    <div class="details-box content-widget">
                        <div class="title-box mb-4">
                            <h4 class="text-primary">Car Details</h4>
                        </div>
                        <ul class="list-group mb-4">
                            <li class="list-group-item">Car ID: <span class="fw-bold">{{ $car->id }}</span></li>
                            <li class="list-group-item">Brand: <span class="fw-bold">{{ $car->brand }}</span></li>
                            <li class="list-group-item">Model: <span class="fw-bold">{{ $car->model }}</span></li>
                            <li class="list-group-item">Year: <span class="fw-bold">{{ $car->year }}</span></li>
                            <li class="list-group-item">Per Day Rent: <span class="fw-bold">${{ $car->daily_rent_price }}</span></li>
                            <li class="list-group-item">
                                @if($car->availability===1)
                                <div>Status: Available</div>
                                @else
                                <div>Status: Not Available</div>
                                @endif
                            </li>
                        </ul>

                        <!-- Rental Booking Form -->
                        <div class="rental-booking p-4 border rounded bg-light">
                            <h5 class="text-secondary mb-3">Book Your Rental</h5>
                            <form id="bookingForm" method="POST" action="{{ route('car.book') }}">
                                @csrf
                                <input type="hidden" name="car_id" value="{{ $car->id }}">

                                <!-- Hidden field for per day rent -->
                                <input type="hidden" id="per_day_rent" name="per_day_rent" value="{{ $car->daily_rent_price }}">


                                <!-- Start Date -->
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Start Date:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control" required>
                                </div>

                                <!-- End Date -->
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End Date:</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control" required>
                                    @error('end_date')
                                    <div class="error">{{message}}</div>
                                    @enderror

                                </div>

                                <!-- Total Cost -->
                                <div class="mb-4">
                                    <label for="total_cost" class="form-label">Total Cost:</label>
                                    <input type="text" id="total_cost" name="total_cost" class="form-control" readonly>
                                </div>

                                <!-- Book Now Button -->
                                <button type="submit" class="btn btn-primary w-100">Book Now</button>
                            </form>
                        </div>

                        <!-- Unavailable Dates -->
                        <div class="unavailable-dates mt-5">
                            <h5 class="text-danger">Unavailable Dates:</h5>
                            <ul class="list-group">
                                @foreach($unavailableDates as $date)
                                <li class="list-group-item">{{ $date }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>








                </div>
            </div>

        </div>

    </div>
</section>
<!-- property-details end -->


<!-- subscribe-section -->
<section class="subscribe-section bg-color-3">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
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

<!-- JavaScript for Dynamic Cost Calculation -->
<script>
    document.getElementById('start_date').addEventListener('change', calculateTotalCost);
    document.getElementById('end_date').addEventListener('change', calculateTotalCost);

    function calculateTotalCost() {
        const startDate = new Date(document.getElementById('start_date').value);
        const endDate = new Date(document.getElementById('end_date').value);
        const perDayRent = parseFloat(document.getElementById('per_day_rent').value);


        if (startDate && endDate && endDate >= startDate) {
            const timeDiff = endDate.getTime() - startDate.getTime();
            const days = Math.ceil(timeDiff / (1000 * 3600 * 24)) + 1; // +1 to include both start and end date
            const totalCost = days * perDayRent;
            document.getElementById('total_cost').value = totalCost.toFixed(2); // Update total cost with 2 decimal places
        }
    }
</script>
@endsection