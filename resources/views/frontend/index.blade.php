@extends('frontend.master')


@section('frontend')
<!-- banner-section -->
<section class="banner-section" style="background-image: url({{asset('frontend')}}/images/banner/banner-01.jpg);">
    <div class="auto-container">
        <div class="inner-container">
            <div class="content-box centred">
                <h2>Find Your Perfect Rental Car</h2>
                <p>Affordable, Reliable, and Convenient Car Rental</p>
            </div>
            <div class="search-field">
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">

                            <li class="tab-btn">RENT</li>
                        </ul>
                    </div>
                    <div class="tabs-content info-group">

                        <div>
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="{{route('cars.search')}}" method="GET" class="search-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Search Property</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search" placeholder="Search by Property, Location or Landmark..." required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="switch_btn_one ">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->




<!-- feature-section -->
@php
$cars=App\Models\Car::orderBy('id', 'desc')->limit(3)->get();
@endphp
<section class="feature-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>Features</h5>
            <h2>Featured Car</h2>
            <p>Explore our top-featured cars, handpicked for quality, comfort, and affordability to enhance your driving experience.</p>
        </div>
        <div class="row clearfix">

            @foreach ($cars as $car)
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset($car->image)}}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('frontend')}}/images/profile1.jpg" alt=""></figure>
                                    <h6>Admin</h6>
                                </div>
                                @if($car->availability==1)
                                <div class="buy-btn pull-right"><a href="property-details.html">Available</a></div>
                                @else
                                <div class="buy-btn pull-right"><a href="property-details.html">Not Available</a></div>
                                @endif
                            </div>
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
                                <li><i class="icon-14"></i>{{$car->brand}}</li>

                                <li><i class="icon-16"></i>{{$car->car_type}}</li>
                            </ul>
                            <div class="btn-box"><a href="{{route('seeDetails',$car->id)}}" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
        <div class="more-btn centred"><a href="{{route('rental')}}" class="theme-btn btn-one">View All Listing</a></div>
    </div>
</section>
<!-- feature-section end -->


<!-- video-section -->
<section class="video-section centred" style="background-image: url({{asset('frontend')}}/images/background/car-01.jpg);">
    <div class="auto-container">
        <div class="video-inner">
            <div class="video-btn">
                <a href="https://www.youtube.com/watch?v=54-NEylEUZE" class="lightbox-image" data-caption=""><i class="icon-17"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- video-section end -->


<!-- deals-section -->
@php
$hotCars=App\Models\Car::orderBy('id', 'asc')->limit(3)->get();
@endphp
<section class="deals-section sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Hot Cars</h5>
            <h2>Top Picks for Your Next Journey</h2>
        </div>

        <div class="row clearfix">
            @foreach ($hotCars as $hotCar)
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset($hotCar->image)}}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('frontend')}}/images/profile1.jpg" alt=""></figure>
                                    <h6>Admin</h6>
                                </div>
                                @if($hotCar->availability===1)
                                <div class="buy-btn pull-right"><a href="property-details.html">Available</a></div>
                                @else
                                <div class="buy-btn pull-right"><a href="property-details.html">Not Available</a></div>
                                @endif
                            </div>
                            <div class="title-text">
                                <h4><a href="{{route('seeDetails',$hotCar->id)}}">{{$hotCar->name}}</a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Daily Rent Price</h6>
                                    <h4>${{$hotCar->daily_rent_price}}</h4>
                                </div>

                            </div>

                            <ul class="more-details clearfix">
                                <li><i class="col-lg-2"></i>Brand: {{$hotCar->brand}}</li>

                                <li><i class="col-lg-2"></i>Type: {{$hotCar->car_type}}</li>
                            </ul>
                            <div class="btn-box"><a href="{{route('seeDetails',$hotCar->id)}}" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>

            </div>

            @endforeach






        </div>

    </div>
</section>
<!-- deals-section end -->


<!-- testimonial-section end -->
<section class="testimonial-section bg-color-1 centred">
    <div class="pattern-layer" style="background-image: url({{asset('frontend')}}/images/shape/shape-1.png);"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>Testimonials</h5>
            <h2>What They Say About Us</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="{{asset('frontend')}}/images/profile1.jpg" alt=""></figure>
                    <div class="text">
                        <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                    </div>
                    <div class="author-info">
                        <h4>Rebeka Dawson</h4>
                        <span class="designation">Instructor</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="{{asset('frontend')}}/images/profile1.jpg" alt=""></figure>
                    <div class="text">
                        <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                    </div>
                    <div class="author-info">
                        <h4>Marc Kenneth</h4>
                        <span class="designation">Founder CEO</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <figure class="thumb-box"><img src="{{asset('frontend')}}/images/profile1.jpg" alt=""></figure>
                    <div class="text">
                        <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded. To make that happen we are committed to provid ing an environment in which residents can enjoy.</p>
                    </div>
                    <div class="author-info">
                        <h4>Owen Lester</h4>
                        <span class="designation">Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->
@endsection