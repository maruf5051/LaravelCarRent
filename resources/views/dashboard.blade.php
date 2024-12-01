@extends('frontend.master')


@section('frontend')

@include('frontend.layout.profileTitle')
<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-details sec-pad-2">
    <div class="auto-container">
        <div class="row clearfix">









            @include('frontend.layout.profileSidebar')




            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="news-block-one">
                        <div class="inner-box">

                            <div class="lower-content">





                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card-body" style="background-color: #1baf65;">
                                            <h1 class="card-title" style="color: white; font-weight: bold;">8
                                            </h1>
                                            <h5 class="card-text" style="color: white;"> Number of rental car
                                            </h5>

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card-body" style="background-color: #ffc107;">
                                            <h1 class="card-title" style="color: white; font-weight: bold; ">5
                                            </h1>
                                            <h5 class="card-text" style="color: white;"> Current Booking
                                            </h5>

                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="card-body" style="background-color: #002758;">
                                            <h1 class="card-title" style="color: white; font-weight: bold;">3
                                            </h1>
                                            <h5 class="card-text" style="color: white; "> Past Booking
                                            </h5>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>


                <div class="blog-details-content">
                    <div class="news-block-one">
                        <div class="inner-box">


                        </div>
                    </div>


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