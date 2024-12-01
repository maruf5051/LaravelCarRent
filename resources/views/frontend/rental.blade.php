@extends('frontend.master')


@section('frontend')
<!--Page Title-->
<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{asset('frontend')}}/images/shape/shape-9.png);"></div>
        <div class="pattern-2" style="background-image: url({{asset('frontend')}}/images/shape/shape-10.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Rentals</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Rentals</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- property-page-section -->
<section class="property-page-section property-list">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="default-sidebar property-sidebar">
                    <div class="filter-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Property</h5>
                        </div>
                        <div class="widget-content">
                            <form action="{{ route('cars.filter') }}" method="GET">
                                @csrf
                                <div class="select-box">
                                    <select class="wide" name="brand">
                                        <option data-display="All Brand">Brand</option>
                                        <option value="Lada">Lada</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Ford">Ford</option>
                                        <option value="MINI (a BMW subsidiary)">MINI (a BMW subsidiary)</option>
                                        <option value="BMW">BMW</option>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="wide" name="car_type">
                                        <option data-display="Select Type">Type</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Coupe">Coupe</option>
                                        <option value="Hatchback">Hatchback</option>


                                    </select>
                                </div>

                                <div class="select-box">
                                    <div>
                                        <label for="rent_min" class="form-label">Min Rent Price</label>
                                        <input type="number" name="rent_min" id="rent_min" class="form-control" placeholder="0">
                                    </div>

                                    <div>
                                        <label for="rent_max" class="form-label">Max Rent Price</label>
                                        <input type="number" name="rent_max" id="rent_max" class="form-control" placeholder="1000">
                                    </div>
                                </div>

                                <div class="filter-btn">
                                    <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="property-content-side">

                    <div class="wrapper list">
                        <div class="deals-list-content list-item">
                            @foreach($cars as $car)
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="{{asset($car->image)}}" alt="" style="height:350px; width:300px;"></figure>


                                        @if($car->availability==1)
                                        <div class="buy-btn pull-right"><a href="property-details.html">Available</a></div>
                                        @else
                                        <div class="buy-btn pull-right"><a href="property-details.html">Not Available</a></div>
                                        @endif
                                    </div>
                                    <div class="lower-content">
                                        <div class="title-text">
                                            <h4><a href="{{route('seeDetails',$car->id)}}">{{$car->name}}</a></h4>
                                        </div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Daily Rent Price</h6>
                                                <h4>${{$car->daily_rent_price}}</h4>
                                            </div>

                                        </div>

                                        <ul class="more-details clearfix">
                                            <li><i></i>Brand: {{$car->brand}}</li>

                                            <li><i></i>Type: {{$car->car_type}}</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <div class="btn-box pull-left"><a href="{{route('seeDetails',$car->id)}}" class="theme-btn btn-two">See Details</a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- property-page-section end -->


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