<!-- main-footer -->
<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>About</h3>
                        </div>
                        <div class="text">
                            <p>our commitment to providing reliable, affordable, and convenient car rental services tailored to meet your unique needs.</p>
                            <p>Handpicked Vehicles for Your Comfort.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index.html">About Us</a></li>
                                <li><a href="index.html">Rentals</a></li>
                                <li><a href="index.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">

                <div class="copyright pull-left">
                    <p><a href="index.html">RENTACAR</a> &copy; 2024 All Right RENTACAR</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="index.html">Terms of Service</a></li>
                    <li><a href="index.html">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->



<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fal fa-angle-up"></span>
</button>
</div>





<!-- jequery plugins -->
<script src="{{asset('frontend')}}/js/jquery.js"></script>
<script src="{{asset('frontend')}}/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/js/owl.js"></script>
<script src="{{asset('frontend')}}/js/wow.js"></script>
<script src="{{asset('frontend')}}/js/validation.js"></script>
<script src="{{asset('frontend')}}/js/jquery.fancybox.js"></script>
<script src="{{asset('frontend')}}/js/appear.js"></script>
<script src="{{asset('frontend')}}/js/scrollbar.js"></script>
<script src="{{asset('frontend')}}/js/isotope.js"></script>
<script src="{{asset('frontend')}}/js/jquery.nice-select.min.js"></script>
<script src="{{asset('frontend')}}/js/jQuery.style.switcher.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery-ui.js"></script>
<script src="{{asset('frontend')}}/js/nav-tool.js"></script>


<!-- toaster js -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>


<!-- main-js -->
<script src="{{asset('frontend')}}/js/script.js"></script>



</body><!-- End of .page_wrapper -->

</html>