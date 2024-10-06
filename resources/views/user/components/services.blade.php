@extends('user.layouts.app')

@section('body')

<section class="service-section bg-grey padding">
    <div class="bg-half"></div>
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
            <h4><span></span>What We Offer</h4>
            <h2 class="white">Start your journey with<br>Ridek Taxi Company!</h2>
            <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                master new technologies.</p>
        </div>
        <!--/.section-heading-->
        <div class="swiper-outside">
            <div class="service-carousel">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="service-item wow fade-in-bottom" data-wow-delay="200ms">
                            <div class="service-thumb">
                                <img src="{{asset('img/service-1.jpg')}}" alt="img">
                                <div class="service-shape-wrap">
                                    <div class="service-shape"></div>
                                </div>
                                <div class="service-car"><img src="{{asset('img/car-1.png')}}" alt="car"></div>
                            </div>
                            <div class="service-content">
                                <h3><a href="service-details.html">Regular Transport</a></h3>
                                <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                    companies!</p>
                                <a class="read-more" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="service-thumb">
                                <img src="{{asset('img/service-2.jpg')}}" alt="img">
                                <div class="service-shape-wrap">
                                    <div class="service-shape"></div>
                                </div>
                                <div class="service-car"><img src="{{asset('img/car-1.png')}}" alt="car"></div>
                            </div>
                            <div class="service-content">
                                <h3><a href="service-details.html">Airport Transport</a></h3>
                                <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                    companies!</p>
                                <a class="read-more" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item wow fade-in-bottom" data-wow-delay="600ms">
                            <div class="service-thumb">
                                <img src="{{asset('img/service-3.jpg')}}" alt="img">
                                <div class="service-shape-wrap">
                                    <div class="service-shape"></div>
                                </div>
                                <div class="service-car"><img src="{{asset('img/car-1.png')}}" alt="car"></div>
                            </div>
                            <div class="service-content">
                                <h3><a href="service-details.html">Luggage Transport</a></h3>
                                <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                    companies!</p>
                                <a class="read-more" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item">
                            <div class="service-thumb">
                                <img src="{{asset('img/service-4.jpg')}}" alt="img">
                                <div class="service-shape-wrap">
                                    <div class="service-shape"></div>
                                </div>
                                <div class="service-car"><img src="{{asset('img/car-1.png')}}" alt="car"></div>
                            </div>
                            <div class="service-content">
                                <h3><a href="service-details.html">City Transport</a></h3>
                                <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                    companies!</p>
                                <a class="read-more" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="service-item">
                            <div class="service-thumb">
                                <img src="{{asset('img/service-5.jpg')}}" alt="img">
                                <div class="service-shape-wrap">
                                    <div class="service-shape"></div>
                                </div>
                                <div class="service-car"><img src="{{asset('img/car-1.png')}}" alt="car"></div>
                            </div>
                            <div class="service-content">
                                <h3><a href="service-details.html">Business Transport</a></h3>
                                <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                    companies!</p>
                                <a class="read-more" href="service-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div><!-- Carousel Dots -->
            </div>
            <!-- Carousel Arrows -->
            <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
            <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
        </div>
    </div>
</section>
<!--/.service-section-->
    
@endsection