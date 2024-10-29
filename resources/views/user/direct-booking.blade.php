@extends('user.layouts.app')

@section('title', 'Direct Booking')

<style>
    .service-carousel {
        max-width: 100%;
        margin: auto;
    }

    .service-item {
        width: 100%;
        height: 600px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .service-thumb {
        flex: 1;
    }

    .service-content {
        padding: 15px;
    }
</style>

@section('body')
    <section class="pricing-section bg-grey bd-bottom padding">
        <div class="container">
            <h3>Book Predefine Taxi</h3>
            <form action="{{ route('predefine-booking.store') }}" method="POST">
                @csrf
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="col-md-6">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" required>
                    </div>
                    <div class="col-md-6">
                        <label>Starting Destination</label>
                        <input type="text" name="starting_dest" class="form-control" placeholder="Enter starting destination" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label>Ending Destination</label>
                        <input type="text" name="ending_dest" class="form-control" placeholder="Enter ending destination" required>
                    </div>
                    <div class="col-md-6">
                        <label>Ride Date</label>
                        <input type="date" name="ride_date" class="form-control" required min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label>Ride Time</label>
                        <input type="time" name="ride_time" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Car Name</label>
                        <input type="text" name="car_name" class="form-control" value="{{ $carData['car_name'] }}" readonly>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label>Car Model</label>
                        <input type="text" name="car_model" class="form-control" value="{{ $carData['car_model'] }}" readonly>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label>Initial Charge</label>
                        <input type="text" name="initial_charge" class="form-control" value="{{ $carData['initial_charge'] }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Price Per KM</label>
                        <input type="text" name="per_mil_km" class="form-control" value="{{ $carData['per_mil_km'] }}" readonly>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label>Price Per Minute</label>
                        <input type="text" name="per_stopped_traffic" class="form-control" value="{{ $carData['per_stopped_traffic'] }}" readonly>
                    </div>
                    <div class="col-md-6">
                        <label>Passengers</label>
                        <input type="text" name="passengers" class="form-control" value="{{ $carData['passengers'] }}" readonly>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label>Message</label>
                        <textarea class="form-control" name="message" placeholder="Enter your message"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <button type="submit" class="default-btn">Submit Booking</button>
                        <a href="{{route('home')}}" class="default-btn">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
