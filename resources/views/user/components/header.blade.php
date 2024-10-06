
@section('header')
<header class="main-header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-wrap">
                <div class="top-left">
                    <p>Reliable Taxi Service & Transport Solutions!</p>
                </div>
                <div class="top-right">
                    <ul class="top-header-nav">
                        <li><a href="faqs.html">Help</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="faqs.html">FAQ</a></li>
                    </ul>
                    <ul class="header-social-share">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--/.top-header-->
    <div class="mid-header">
        <div class="container">
            <div class="mid-header-wrap">
                <div class="site-logo">
                    <a href="{{route('home')}}"><img src="{{asset(img/logo-dark.png)}}" alt="Logo"></a>
                </div><!--/.site-logo-->
                <ul class="header-info">
                    <li>
                        <div class="header-info-icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Call us now</span><a href="tel:5267214392">5267-214-392</a></h3>
                        </div>
                    </li>
                    <li>
                        <div class="header-info-icon">
                            <i class="las la-envelope-open"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Email now</span>Info.ridek@mail.com</h3>
                        </div>
                    </li>
                    <li>
                        <div class="header-info-icon">
                            <i class="las la-map-marked-alt"></i>
                        </div>
                        <div class="header-info-text">
                            <h3><span>Halk Street</span>New York, USA - 2386</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--/.mid-header-->
    <div class="nav-menu-wrapper">
        <div class="container">
            <div class="nav-menu-inner">
                <div class="site-logo">
                    <a href="{{route('home')}}"><img src="{{asset('img/logo-dark.png')}}" alt="Logo"></a>
                </div><!--/.site-logo-->
                <div class="header-menu-wrap">
                    <ul class="nav-menu">
                        <li class="active dropdown_menu">
                            <a href="index.html">Home</a>
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                                {{-- <li><a href="index-2.html">Home Modern</a></li> --}}
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="about-us.html">Company</a>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="about-company.html">About Company</a></li>
                                <li><a href="our-services.html">Our Services</a></li>
                                <li><a href="service-details.html">Services Details</a></li>
                                <li><a href="book-taxi.html">Book a Ride</a></li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="our-taxi.html">Our Taxi</a>
                            <ul>
                                <li><a href="our-taxi.html">Taxi Lists</a></li>
                                <li><a href="taxi-details.html">Taxi Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="our-drivers.html">Our Drivers</a></li>
                                <li><a href="driver-details.html">Driver Details</a></li>
                                <li><a href="testimonials.html">Customer Reviews</a></li>
                                <li><a href="faqs.html">Help &amp; Faq's</a></li>
                                <li><a href="404.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="dropdown_menu">
                            <a href="blog-grid.html">Blog</a>
                            <ul>
                                <li><a href="blog-grid.html">Grid Posts</a></li>
                                <li><a href="blog-classic.html">Classic Posts</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="menu-right-item">
                    <div class="search-icon dl-search-icon">
                        <i class="las la-search"></i>
                    </div>
                    <div class="sidebox-icon dl-sidebox-icon">
                        <i class="las la-bars"></i>
                    </div>
                    <a href="book-taxi.html" class="menu-btn">Book a Taxi</a>
                </div>
                <div class="mobile-menu-icon">
                    <div class="burger-menu">
                        <div class="line-menu line-half first-line"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu line-half last-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.nav-menu-->
</header>
@endsection