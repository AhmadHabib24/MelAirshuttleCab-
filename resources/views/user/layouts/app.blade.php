<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ridek Online Taxi Booking HTML5 Template">
    <meta name="author" content="DynamicLayers">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/keyframe-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elements.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Bootstrap CSS -->
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        .highlighted {
            background-color: yellow;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="site-preloader">
        <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>
            <div class="car-detail spoiler"></div>
            <div class="car-detail back"></div>
            <div class="car-detail center"></div>
            <div class="car-detail center1"></div>
            <div class="car-detail front"></div>
            <div class="car-detail wheel"></div>
            <div class="car-detail wheel wheel2"></div>
        </div>
    </div>
    <!--/.site-preloader-->
    {{-- header --}}
    <!--/.site-preloader-->

    <header class="main-header">
        <div class="top-header">
            <div class="container">
                <div class="top-header-wrap">
                    <div class="top-left">
                        <p>Reliable Taxi Service & Transport Solutions!</p>
                    </div>
                    <div class="top-right">
                        <ul class="top-header-nav">
                            <li><a href="{{ route('faqs') }}">Help</a></li>
                            <li><a href="{{ route('contact') }}">Support</a></li>
                            <li><a href="{{ route('faqs') }}">FAQ</a></li>
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
                        <a href="{{ route('home') }}"><img src="{{ asset('img/logo-dark.png') }}" alt="Logo"></a>
                    </div><!--/.site-logo-->
                    <ul class="header-info">
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-phone-volume"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Call us now</span><a href="tel:+61416252787">+61416252787</a></h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-envelope-open"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Email now</span>info.MelAirshuttleCab@gmail.com</h3>
                            </div>
                        </li>
                        <li>
                            <div class="header-info-icon">
                                <i class="las la-map-marked-alt"></i>
                            </div>
                            <div class="header-info-text">
                                <h3><span>Level 5/55 Swanston St, </span>Melbourne VIC 3000</h3>
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
                        <a href="{{ route('home') }}"><img src="{{ asset('img/logo-dark.png') }}"
                                alt="Logo"></a>
                    </div><!--/.site-logo-->
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('booking') ? 'active' : '' }}">
                                <a href="{{ route('booking') }}">Book a Ride</a>
                            </li>
                            <li class="{{ request()->routeIs('afareestimate') ? 'active' : '' }}">
                                <a href="{{ route('afareestimate') }}">Calculate Fare</a>
                            </li>
                            <li class="{{ request()->routeIs('aboutpage') ? 'active' : '' }}">
                                <a href="{{ route('aboutpage') }}">About Us</a>
                            </li>
                            <li class="{{ request()->routeIs('Client-review.index') ? 'active' : '' }}">
                                <a href="{{ route('Client-review.index') }}">Testimonials</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li class="{{ request()->routeIs('login') ? 'active' : '' }}">
                                <a href="{{ route('login') }}">Login</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-right-item">
                        <div class="search-icon dl-search-icon">
                            <i class="las la-search"></i>
                        </div>
                        <div class="sidebox-icon dl-sidebox-icon">
                            <i class="las la-bars"></i>
                        </div>
                        <a href="{{ route('booking') }}" class="menu-btn">Book a Taxi</a>
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
    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="las la-search"></i>
                </button>
            </form>
            <div class="search-close"><i class="las la-times"></i></div>
        </div>
    </div>
    
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('img/logo-light.png') }}" alt="logo"></a>
            </div>
            <p>All the essentials for your taxi business are here! MelAirshuttleCab is crafted exclusively for taxi service companies!</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>+61416252787</li>
                {{-- <a href="tel:+61416252787"></a> --}}
                <li>
                    <span>You can find us at:</span>Level 5/55 Swanston St, Melbourne VIC 3000
                </li>
                <li><span>Email now:</span>info.MelAirshuttleCab@gmail.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>


    @yield('body')
    <!-- Add this to your main layout file -->
    @include('user.whatsapp-chat')



    <!-- Toast Container -->
    {{-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded me-2" alt="...">
                <strong class="me-auto" id="toastTitle">Notification</strong>
                <small id="toastTime">Just now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="toastBody">
                <!-- Message will be injected here -->
            </div>
        </div>
    </div> --}}

    <!-- Bootstrap and your custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toastElement = document.getElementById('liveToast');
            if (toastElement) {
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastElement);

                // Handle success message
                @if (session('success'))
                    const toastBody = document.getElementById('toastBody');
                    const toastTitle = document.getElementById('toastTitle');
                    const toastTime = document.getElementById('toastTime');
                    toastTitle.textContent = 'Success';
                    toastBody.textContent = "{{ session('success') }}";
                    toastTime.textContent = 'Just now';
                    toastBootstrap.show();
                @endif

                // Handle error message
                @if ($errors->any())
                    const toastBody = document.getElementById('toastBody');
                    const toastTitle = document.getElementById('toastTitle');
                    const toastTime = document.getElementById('toastTime');
                    toastTitle.textContent = 'Error';
                    toastBody.innerHTML =
                        "@foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach";
                    toastTime.textContent = 'Just now';
                    toastBootstrap.show();
                @endif
            }
        });
    </script>

    <footer class="footer-section">
        <div class="footer-top-wrap bg-grey">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="brand">
                                <a class="footer-logo" href="{{ route('home') }}"><img
                                        src="{{ asset('img/logo-light.png') }}" alt="logo"></a>
                                <p>Everything your taxi business needs is right here! MelAirshuttleCab is designed specifically for taxi service companies!</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-call">
                                <i class="las la-phone-volume"></i>
                                <p><span>Call For Taxi</span><a href="tel:+61416252787">+61416252787</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.footer-top-wrap-->
        <div class="footer-mid-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Working Hours</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>24 Hours</span>Services</li>
                                {{-- <li><span>Saturday:</span>10.00am To 7.30pm</li> --}}
                                {{-- <li><span>Sunday:</span>Close Day!</li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item footer-list">
                            <div class="widget-title">
                                <h3>Usefull Links</h3>
                            </div>
                            <ul class="footer-links">
                                <li><a href="{{ route('booking') }}">Taxi Booking</a></li>
                                <li><a href="{{ route('faqs') }}">Help Center</a></li>
                                <li><a href="{{ route('aboutpage') }}">Privacy and Policy</a></li>
                                <li> <a href="{{ route('Client-review.index') }}">Testimonials</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Head Office</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>Location:</span>Level 5/55 Swanston St, Melbourne VIC 3000</li>
                                <li><span>Join Us:</span>info.MelAirshuttleCab@gmail.com</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="running-taxi">
                <div class="taxi"></div>
                <div class="taxi-2"></div>
                <div class="taxi-3"></div>
            </div>
        </div>
        <!--/.footer-mid-wrap-->
        <div class="copyright-wrap">
            <div class="container">
                <p>© <span id="currentYear"></span> Mel Air Shuttle Cab All Rights Reserved.</p>
            </div>
        </div>
        <!--/.copyright-wrap-->
    </footer>
    <!--/.footer-section-->

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top">
            <i class="las la-arrow-up"></i>
        </button>
    </div>
    <!--scrollup-->

    <div class="dl-cursor">
        <div class="cursor-icon-holder"><i class="las la-times"></i></div>
    </div>
    <!--/.dl-cursor-->



    <!--jQuery Lib-->
    <script src="{{ asset('js/vendor/jquary-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.datetimepicker.full.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('js/vendor/smooth-scroll.js') }}"></script>
    <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('js/book-ride.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Add this script to initialize Toastr notifications -->
    <script>
        $(document).ready(function() {
            @if (session('success'))
                toastr.success('{{ session('success') }}');
            @elseif (session('error'))
                toastr.error('{{ session('error') }}');
            @endif
        });
    </script>

    <script>
       $(document).ready(function () {
    // Prevent form submission on pressing Enter
    $('#form').on('submit', function (e) {
        e.preventDefault(); // Prevents the form from submitting
    });

    // Function to highlight text
    function highlightText(element, keyword) {
        const text = element.text();
        const regex = new RegExp(`(${keyword})`, 'gi'); // Case-insensitive search
        const newText = text.replace(regex, '<span class="highlighted">$1</span>');
        element.html(newText);
    }

    // Function to remove highlights
    function removeHighlights() {
        $('body').find('.highlighted').each(function () {
            const parent = $(this).parent();
            $(this).replaceWith($(this).text()); // Replace span with its original text
            parent.html(parent.html()); // Fix potential broken tags
        });
    }

    // Live search event handler (Runs on every key press)
    $('#popup-search').on('keyup', function () {
        let keyword = $(this).val().toLowerCase();

        // Remove previous highlights
        removeHighlights();

        // Exit if the input is empty
        if (keyword === '') {
            return;
        }

        // Highlight all matching content on the page
        $('body *').each(function () {
            if ($(this).children().length === 0) { // Avoid selecting parent elements
                const text = $(this).text().toLowerCase();
                if (text.includes(keyword)) {
                    highlightText($(this), keyword);
                }
            }
        });
    });

    // Search close functionality
    $('.search-close').on('click', function () {
        $('#popup-search-box').fadeOut();
        removeHighlights(); // Remove highlights when search is closed
    });
});

    </script>

</body>

</html>
