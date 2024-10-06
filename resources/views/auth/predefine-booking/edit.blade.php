<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Predefine Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100 mb-5">
                        Edit Predefine Booking
                    </h3>

                    <form action="{{ route('category-booking.update', $booking->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Car Name -->
                        <div class="mb-4">
                            <label for="car_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Car Name</label>
                            <input type="text" name="car_name" id="car_name" value="{{ old('car_name', $booking->car_name) }}" class="mt-1 block w-full dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <!-- Car Model -->
                        <div class="mb-4">
                            <label for="car_model" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Car Model</label>
                            <input type="text" name="car_model" id="car_model" value="{{ old('car_model', $booking->car_model) }}" class="mt-1 block w-full dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <!-- Initial Charge -->
                        <div class="mb-4">
                            <label for="initial_charge" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Initial Charge</label>
                            <input type="number" step="0.01" name="initial_charge" id="initial_charge" value="{{ old('initial_charge', $booking->initial_charge) }}" class="mt-1 block w-full dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <!-- Per Km Charge -->
                        <div class="mb-4">
                            <label for="per_mil_km" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Per Km Charge</label>
                            <input type="number" step="0.01" name="per_mil_km" id="per_mil_km" value="{{ old('per_mil_km', $booking->per_mil_km) }}" class="mt-1 block w-full dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <!-- Number of Passengers -->
                        <div class="mb-4">
                            <label for="passengers" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Passengers</label>
                            <input type="number" name="passengers" id="passengers" value="{{ old('passengers', $booking->passengers) }}" class="mt-1 block w-full dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <!-- Ride Date -->
                        <div class="mb-4">
                            <label for="ride_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ride Date</label>
                            <input type="date" name="ride_date" id="ride_date" value="{{ old('ride_date', $booking->ride_date) }}" class="mt-1 block w-full dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <!-- Ride Time -->
                        <div class="mb-4">
                            <label for="ride_time" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Ride Time</label>
                            <input type="time" name="ride_time" id="ride_time" value="{{ old('ride_time', $booking->ride_time) }}" class="mt-1 block w-full dark:bg-gray-700 dark:text-gray-300" required>
                        </div>

                        <!-- Message -->
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Message</label>
                            <textarea name="message" id="message" rows="4" class="mt-1 block w-full dark:bg-gray-700 dark:text-gray-300">{{ old('message', $booking->message) }}</textarea>
                        </div>

                        <div class="mt-6 flex justify-between items-center">
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                                Update Booking
                            </button>
                            <a href="{{ route('category-booking.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            @if (session('success'))
                toastr.success('{{ session('success') }}');
            @elseif (session('error'))
                toastr.error('{{ session('error') }}');
            @endif
        });
    </script>
</x-app-layout>
