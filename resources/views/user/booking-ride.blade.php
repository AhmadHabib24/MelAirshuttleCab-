@extends('user.layouts.app')
@section('title', 'Book a Ride')
@section('body')
<div id="searchbox-overlay"></div>

<section class="page-header">
    <div class="page-header-shape"></div>
    <div class="container">
        <div class="page-header-info">
            <h4>Get Your Cab!</h4>
            <h2>Book Your <span>Ride</span></h2>
            <p>Everything your taxi business <br>needs is already here! </p>
        </div>
    </div>
</section>

<div class="taxi-booking bg-grey padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form action="{{ route('bookride') }}" method="POST">
                    @csrf
                    <div class="taxi-booking-form">
                        <div class="form-field">
                            <i class="las la-user-tie"></i>
                            <input type="text" id="full-name" name="full-name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-envelope-open"></i>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-phone"></i>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" required>
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
                                    <option value="{{ $i }}">{{ $i }} Person{{ $i > 1 ? 's' : '' }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-field">
                            <i class="las la-map-marker"></i>
                            <input type="text" id="start-dest" name="start-dest" class="form-control" placeholder="Start Destination" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-map-marker"></i>
                            <input type="text" id="end-dest" name="end-dest" class="form-control" placeholder="End Destination" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-calendar"></i>
                            <input type="text" id="ride-date" name="ride-date" class="form-control date-picker" placeholder="Select Date" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-clock"></i>
                            <input type="text" id="ride-time" name="ride-time" class="form-control time-picker" placeholder="Select Time" required>
                        </div>
                        <div class="form-field">
                            <i class="las la-luggage-cart"></i>
                            <input type="text" id="luggage" name="luggage" class="form-control" placeholder="Enter your luggage" required>
                        </div>
                        <div class="form-field">
                            <button id="submit" class="default-btn" type="submit">Book Your Taxi</button>
                        </div>
                    </div>
                    <div id="form-messages" class="alert" role="alert"></div>
                </form><!-- Booking Form -->
            </div>
        </div>
    </div>
</div>
<!--/.booking-form-->

<!-- Include jQuery and jQuery UI -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(function() {
        // Initialize datepicker
        $("#ride-date").datepicker({
            dateFormat: 'dd/mm/yy', // Use DD/MM/YYYY format
            onSelect: function(dateText) {
                var parts = dateText.split('/');
                var formattedDate = parts[2] + '-' + parts[1] + '-' + parts[0]; // Convert to YYYY-MM-DD
                $('#ride-date').val(formattedDate);
            }
        });
    });
</script>
@endsection
