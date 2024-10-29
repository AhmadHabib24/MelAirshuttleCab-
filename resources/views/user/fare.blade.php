@extends('user.layouts.app')
@section('title', 'Calculate Fare')
@section('body')
    <section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Calculate Fare!</h4>
                <h2 class="white">Enter location to Estimate your Fare</h2>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-12">
            <section style="margin-top: 50px; margin-bottom: 80px;">
                <div class="container">
                    <div class="card shadow-lg">
                        <div class="card body" style="background: rgb(237, 236, 234); padding: 20px;">
                            <div class="row pos-relative padding">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="booking-wrap text-center">
                                        <form method="GET" action="{{ route('fareestimate') }}">
                                            <div class="fare-form">
                                                <h3 class="mb-3"><i class="fas fa-road"></i> Distance & Fare Estimate</h3>
                                                <div class="form-field mb-3">
                                                    <input type="text" id="pick" name="pick" class="form-control"
                                                        placeholder="Enter your Pickup location" required>
                                                    <span class="text-red-500" id="pick-error"></span>
                                                </div>

                                                <div class="form-field mb-3">
                                                    <input type="text" id="delivery" name="delivery"
                                                        class="form-control" placeholder="Enter your drop location"
                                                        required>
                                                    <span class="text-red-500" id="delivery-error"></span>
                                                </div>
                                               
                                                <div class="form-field">
                                                    <button class="default-btn" type="submit">Calculate Fare</button>
                                                </div>
                                            </div>
                                        </form>

                                        <!-- Fare Card, visible only when session has data -->
                                        @if (session('distance') && session('fare'))
                                            <div class="mt-4 p-2 bg-light text-center rounded shadow-sm" style="max-width: 400px; margin: 0 auto;">
                                                <p class="mb-1"><strong>Distance:</strong> 
                                                    <span class="badge badge-info" style="color: black">{{ session('distance') }} km</span>
                                                </p>
                                                <p class="mb-1"><strong>Estimated Fare:</strong>
                                                    <span class="badge badge-success" style="color: black">
                                                        ${{ number_format(session('fare'), 2) }}
                                                    </span>
                                                </p>
                                            </div>
                                            {{ session()->forget('distance') }}
                                            {{ session()->forget('fare') }}
                                        @else
                                            <div class="alert alert-warning mt-4">
                                                <p>No fare estimate available</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Google Maps and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function cities() {
            var options = {
                types: ['(cities)']
            };
            var pickInput = document.getElementById('pick');
            var pickAutocomplete = new google.maps.places.Autocomplete(pickInput, options);
            var deliveryInput = document.getElementById('delivery');
            var deliveryAutocomplete = new google.maps.places.Autocomplete(deliveryInput, options);
        }

        function initMap() {
            cities();
        }
    </script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MATRIX_API_KEY') }}&libraries=places&callback=initMap"
        async defer></script>
@endsection
