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
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<!-- about-section -->
<section class="about-section about-page pb-0">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_2">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('frontend')}}/images/background/car-01.jpg" alt=""></figure>
                            <div class="text wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <h2>20</h2>
                                <h4>Years of <br />Experience</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_3">
                        <div class="content-box">
                            <div class="sec-title">
                                <h5>About</h5>
                                <h2>Drive Your Dreams – Affordable, Reliable, and Hassle-Free Car Rentals!</h2>
                            </div>
                            <div class="text">
                                <p>"Welcome to RENTACAR, your trusted partner in car rentals. Whether you're planning a family road trip, a weekend getaway, or need a ride for business, we’ve got you covered. Our extensive fleet features everything from compact cars to luxurious SUVs, all available at competitive rates. We pride ourselves on offering not just vehicles, but also an experience that is smooth, transparent, and tailored to your needs. With easy booking options, well-maintained vehicles, and dedicated customer support, RENTACAR is here to make your journey comfortable and memorable. Let us help you drive your dreams, one ride at a time."</p>

                            </div>
                            <ul class="list clearfix">
                                <li>consectetur elit sed do eius</li>
                                <li>consectetur elit sed</li>
                            </ul>
                            <div class="btn-box">
                                <a href="contact.html" class="theme-btn btn-one">Contact With Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->
@endsection