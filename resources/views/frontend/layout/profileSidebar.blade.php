<div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
    <div class="blog-sidebar">
        <div class="sidebar-widget post-widget">
            <div class="widget-title">
                <h4>User Profile </h4>
            </div>
            <div class="post-inner">
                <div class="post">
                    <figure class="post-thumb"><a href="blog-details.html">
                            <img src="{{asset('frontend')}}/images/profile1.jpg" alt=""></a></figure>
                    @php
                    $user=Auth::user();
                    @endphp
                    <h5><a href="blog-details.html">{{$user->name}} </a></h5>
                    <p>{{$user->email}}</p>
                </div>
            </div>
        </div>

        <div class="sidebar-widget category-widget">
            <div class="widget-title">
                <h4>Category</h4>
            </div>
            <div class="widget-content">
                <ul class="category-list ">

                    <li class="current"> <a href="{{ route('dashboard') }}"><i
                                class="fab fa fa-envelope "></i> Dashboard </a></li>



                    <li><a href="{{ route('current.booking') }}"><i class="fa fa-credit-card"
                                aria-hidden="true"></i> Current Booking</a></li>
                    <li><a href="{{route('past.booking')}}"><i class="fa fa-list-alt"
                                aria-hidden="true"></i></i> Past Booking </a></li>
                    <li><a href="{{route('setting')}}"><i class="fa fa-cog" aria-hidden="true"></i>
                            Settings</a></li>
                    <li><a href="{{ route('user.logout') }}"><i class="fa fa-chevron-circle-up"
                                aria-hidden="true"></i> Logout </a></li>
                </ul>
            </div>
        </div>

    </div>
</div>