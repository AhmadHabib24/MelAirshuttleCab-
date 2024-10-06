@extends('user.layouts.app')
@section('body')
<section class="pricing-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
            <h4><span></span>Lets Go With Us!</h4>
            <h2>Choose Your Taxi to Ride!</h2>
            <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                master new technologies.</p>
        </div><!--/.section-heading-->
        <ul class="nav pricing-tab-menu" id="pricing-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="hybrid-taxi" data-bs-toggle="tab"
                    data-bs-target="#hybrid-taxi-content" type="button" role="tab"
                    aria-controls="hybrid-taxi-content" aria-selected="true">Hybrid Taxi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="town-taxt" data-bs-toggle="tab" data-bs-target="#town-taxi-content"
                    type="button" role="tab" aria-controls="town-taxi-content" aria-selected="false">Town
                    Taxi</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="limousine-taxi" data-bs-toggle="tab"
                    data-bs-target="#limousine-taxi-content" type="button" role="tab"
                    aria-controls="limousine-taxi-content" aria-selected="false">Limousine Taxi</button>
            </li>
        </ul>
        <!--Tab Menu-->
        <div class="tab-content" id="pricing-tab-content">
            <div class="tab-pane fade show active" id="hybrid-taxi-content" role="tabpanel"
                aria-labelledby="hybrid-taxi-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$2.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">BMW X5 2008</a></h3>
                                <span class="location">Chicago</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$3.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">Mercedes‑Benz</a></h3>
                                <span class="location">Florida</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$4.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">Hyundai 2022</a></h3>
                                <span class="location">New York</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="town-taxi-content" role="tabpanel" aria-labelledby="town-taxi-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$2.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">BMW X5 2008</a></h3>
                                <span class="location">Chicago</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$3.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">Mercedes‑Benz</a></h3>
                                <span class="location">Florida</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$4.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">Hyundai 2022</a></h3>
                                <span class="location">New York</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="limousine-taxi-content" role="tabpanel" aria-labelledby="limousine-taxi">
                <div class="row">
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$2.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">BMW X5 2008</a></h3>
                                <span class="location">Chicago</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$3.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">Mercedes‑Benz</a></h3>
                                <span class="location">Florida</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding">
                        <div class="pricing-item">
                            <div class="pricing-head-wrap">
                                <div class="pricing-car">
                                    <img src="{{asset('img/pricing-car.png')}}" alt="car">
                                    <div class="price">$4.50/km</div>
                                </div>
                            </div>
                            <div class="pricing-head">
                                <h3><a href="taxi-details.html">Hyundai 2022</a></h3>
                                <span class="location">New York</span>
                            </div>
                            <ul class="pricing-list">
                                <li>Initial Charge: <span>$2.50</span></li>
                                <li>Per Mile/KM: <span>$4.20</span></li>
                                <li>Per Stopped Trafic: <span>$1.50</span></li>
                                <li>Passengers: <span>4 Person</span></li>
                                <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Tab Content -->
    </div>
</section>
<!--/.pricing-section-->
    
@endsection