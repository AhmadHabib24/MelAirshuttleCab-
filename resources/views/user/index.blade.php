@extends('user.layouts.app')
@section('title', 'Home')
<style>
    .service-carousel {
        /* Adjust the width as needed */
        max-width: 100%;
        margin: auto;
        /* Center the carousel */
    }

    .service-item {
        width: 100%;
        /* Make the item take full width of the swiper-slide */
        height: 600px;
        /* Set a fixed height for the cards */
        overflow: hidden;
        /* Ensure overflow content is hidden */
        display: flex;
        flex-direction: column;
        /* Stack children vertically */
        justify-content: space-between;
        /* Space between children */
    }

    .service-thumb {
        flex: 1;
        /* Allow the image to grow */
    }

    .service-content {
        padding: 15px;
        /* Add some padding */
    }
</style>

@section('body')
    <!--/.main-header-->


    @include('user.components.sidebar', ['about' => $about])
    @include('user.components.slider')
    {{-- user.index.blade.php --}}
    @include('user.components.about-section', ['about' => $about])

    <section class="service-section bg-grey padding">
        <div class="bg-half"></div>
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>What We Offer</h4>
                <h2 class="white">Start your journey with<br>Mel Air Shuttle Cab!</h2>
                <p>We successfully handle bookings of varying distances and complexities, providing reliable transportation
                    solutions with long-term guarantees. Our team regularly updates our fleet with the latest vehicles and
                    technologies to ensure a safe and comfortable ride for every journey.</p>

            </div>

            <div class="swiper-outside">
                <div class="service-carousel">
                    <div class="swiper-wrapper">
                        @foreach ($services as $service)
                            <div class="swiper-slide">
                                <div class="service-item wow fade-in-bottom" data-wow-delay="200ms">
                                    <div class="service-thumb">
                                        <img src="{{ asset('img/service-4.jpg') }}" alt="img">
                                        <div class="service-shape-wrap">
                                            <div class="service-shape"></div>
                                        </div>
                                        <div class="service-car"><img src="{{ asset('img/car-1.png') }}" alt="car">
                                        </div>
                                    </div>
                                    <div class="service-content">
                                        <h3><a href="service-details.html">{{ $service->title }}</a></h3>
                                        <p>{{ $service->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
    <section class="booking-section">
        <div class="container">
            <div class="row pos-relative padding">
                <div class="col-lg-4">
                    <div class="booking-car wow fade-in-left" data-wow-delay="200ms"></div>
                </div>
                <div class="col-lg-4">
                    <div class="booking-wrap">
                        <div class="section-heading mb-30">
                            <h4><span></span>Fare Estimate</h4>
                            <h2 class="white">Enter location to Estimate your Fare</h2>
                        </div>
                        <a href="{{route('afareestimate')}}" class="default-btn">Get Started</a>
                       
                        <!-- Show fare estimate here -->
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    




    <section class="pricing-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>Lets Go With Us!</h4>
                <h2>Choose Your Cab to Ride!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                    master new technologies.</p>
            </div><!--/.section-heading-->
            <ul class="nav pricing-tab-menu" id="pricing-tab" role="tablist">
                @foreach ($car_categories as $category)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ Str::slug($category) }}"
                            data-bs-toggle="tab" data-bs-target="#{{ Str::slug($category) }}-content" type="button"
                            role="tab" aria-controls="{{ Str::slug($category) }}-content"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{ $category }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <!--Tab Menu-->
            <div class="tab-content" id="pricing-tab-content">
                <div class="tab-pane fade show active" id="hybrid-taxi-content" role="tabpanel"
                    aria-labelledby="hybrid-taxi-content">
                    <div class="row">
                        @foreach ($cars as $car)
                            <div class="col-lg-4 col-md-6 sm-padding">
                                <div class="pricing-item d-flex flex-column mt-2" style="height: 600px;">
                                    <div class="pricing-head-wrap">
                                        <div class="pricing-car">
                                            <img src="{{ asset($car->car_image) }}" alt="{{ $car->car_name }}">
                                            <div class="price">${{ $car->per_mil_km }}/km</div>
                                        </div>
                                    </div>
                                    <div class="pricing-head">
                                        <h3><a href="#">{{ $car->car_name }} {{ $car->car_model }}</a></h3>
                                        <span class="location">{{ $car->location }}</span>
                                    </div>
                                    <ul class="pricing-list mb-0">
                                        <li>Initial Charge: <span>${{ $car->initial_charge }}</span></li>
                                        <li>Per Mile/KM: <span>${{ $car->per_mil_km }}</span></li>
                                        <li>Price Per Minute: <span>${{ $car->per_stopped_traffic }}</span></li>
                                        <li>Passengers: <span>{{ $car->passengers }} Person</span></li>
                                    </ul>
                                    <button class="default-btn mt-auto book-taxi-btn"
                                        data-car_name="{{ $car->car_name }}" data-car_model="{{ $car->car_model }}"
                                        data-initial_charge="{{ $car->initial_charge }}"
                                        data-per_mil_km="{{ $car->per_mil_km }}"
                                        data-per_stopped_traffic="{{ $car->per_stopped_traffic }}"
                                        data-passengers="{{ $car->passengers }}">
                                        Book Taxi Now
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Scripts -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
           

            <!-- Modal Structure -->


        </div>
    </section>
    <!--/.pricing-section-->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Taxi Booking</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('bookride') }}" method="POST">
                        @csrf
                        <div class="taxi-booking-form">
                            <div class="form-field">
                                <i class="las la-user-tie"></i>
                                <input type="text" id="full-name" name="full-name" class="form-control"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-envelope-open"></i>
                                <input type="email" id="email" name="email" class="form-control"
                                    placeholder="Email" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-phone"></i>
                                <input type="tel" id="phone" name="phone" class="form-control"
                                    placeholder="Phone" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-tags"></i>
                                <select name="package-type" id="package-type" class="niceSelect">
                                    <option value="standard">Standard</option>
                                    <option value="business">Business</option>
                                    <option value="economy">Economy</option>
                                    <option value="vip-special">VIP Special</option>
                                    <option value="comfort">Comfort</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <i class="las la-user-friends"></i>
                                <select name="passengers" id="passengers" class="niceSelect">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}">{{ $i }}
                                            Person{{ $i > 1 ? 's' : '' }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="start-dest" name="start-dest" class="form-control"
                                    placeholder="Start Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="end-dest" name="end-dest" class="form-control"
                                    placeholder="End Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-calendar"></i>
                                <input type="text" id="ride-date" name="ride-date" class="form-control date-picker"
                                    placeholder="Select Date" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-clock"></i>
                                <input type="text" id="ride-time" name="ride-time" class="form-control time-picker"
                                    placeholder="Select Time" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-luggage-cart"></i>
                                <input type="text" id="luggage" name="luggage" class="form-control"
                                    placeholder="Enter your luggage" required>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                            <button type="submit" class="default-btn">Book Your Taxi</button>
                            <!-- Change to type="submit" -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    window.onload = function() {
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
            backdrop: 'static',
            keyboard: false
        });
        myModal.show();
    };
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all book taxi buttons
        const bookButtons = document.querySelectorAll('.book-taxi-btn');

        // Loop through all buttons to add click event listeners
        bookButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get data attributes from the clicked button
                const carName = button.getAttribute('data-car_name');
                const carModel = button.getAttribute('data-car_model');
                const initialCharge = button.getAttribute('data-initial_charge');
                const perMilKm = button.getAttribute('data-per_mil_km');
                const perStoppedTraffic = button.getAttribute('data-per_stopped_traffic');
                const passengers = button.getAttribute('data-passengers');

                // Build the URL with the data as query parameters
                const url = `{{ route('predefine-booking') }}?car_name=${encodeURIComponent(carName)}&car_model=${encodeURIComponent(carModel)}&initial_charge=${encodeURIComponent(initialCharge)}&per_mil_km=${encodeURIComponent(perMilKm)}&per_stopped_traffic=${encodeURIComponent(perStoppedTraffic)}&passengers=${encodeURIComponent(passengers)}`;

                // Redirect to the new URL
                window.location.href = url;
            });
        });
    });
</script>



{{-- <script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MATRIX_API_KEY') }}&libraries=places&callback=initMap"
async defer></script> --}}




@endsection
