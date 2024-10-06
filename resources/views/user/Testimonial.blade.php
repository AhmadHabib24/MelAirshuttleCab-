@extends('user.layouts.app')
@section('title','Testimonial')
@section('body')

<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            {{-- <h4>Help &amp; Faqs!</h4> --}}
            <h2>Clients <br> <span>Testimonial!</span></h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>
<section class="testimonial-section bg-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-heading mb-10">
                    <h4><span></span>Clients Testimonial</h4>
                    <h2>MelAirShuttleCab Passenger Reviews...</h2>
                    <p>Everything your taxi business needs is right here! MelAirshuttleCab is designed specifically for taxi service companies!</p>
                </div>
                <div class="swiper-outside testi-pagination">
                    <div class="testimonial-carousel">
                        <div class="swiper-wrapper">
                            {{-- @dd($testimonials) --}}
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>{{ $testimonial->content }}</p>
                                        <div class="testi-author">
                                            <div class="author-thumb">
                                                <img src="{{ asset($testimonial->author_image) }}"
                                                    alt="author">
                                            </div>
                                            <div class="author-info">
                                                <h3>{{ $testimonial->author_name }}
                                                    <span>{{ $testimonial->author_title }}</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination"></div><!-- Carousel Dots -->
                </div>

                <!-- Initialize Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper('.testimonial-carousel', {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                    });
                </script>
            </div>
            <div class="col-lg-6">
                <div class="feature-wrap">
                    <div class="section-heading mb-30 wow fade-in-right" data-wow-delay="200ms">
                        <h4 class="white"><span></span>Why Choose Us!</h4>
                        <h2 class="white">Why Ride with MelAirShuttleCab?</h2>
                        <p class="white">All the essentials for your taxi business are here! MelAirshuttleCab is crafted exclusively for taxi service companies!</p>
                    </div>
                    <!--/.section-heading-->
                    <ul class="ridek-features">
                        <li class="wow fade-in-right" data-wow-delay="300ms">
                            <div class="feature-icon">
                                <i class="las la-gem"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Safe Guarantee</h3>
                                <p>Ensuring a secure and reliable ride, <br> no matter the distance.</p>
                            </div>
                        </li>
                        <li class="wow fade-in-right" data-wow-delay="400ms">
                            <div class="feature-icon">
                                <i class="las la-taxi"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Fast Pickups</h3>
                                <p>Get picked up quickly, <br> right when you need it.</p>
                            </div>
                        </li>
                        <li class="wow fade-in-right" data-wow-delay="500ms">
                            <div class="feature-icon">
                                <i class="las la-tachometer-alt"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Quick Ride</h3>
                                <p>Enjoy fast and efficient rides, <br> saving you time.</p>
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection