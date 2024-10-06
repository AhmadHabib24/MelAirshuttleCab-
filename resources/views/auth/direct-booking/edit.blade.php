<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Direct Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100 mb-5">Edit Direct Booking</h3>

                    <form action="{{ route('direct-booking.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="car_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Car Name</label>
                                <input type="text" name="car_name" id="car_name" 
                                       value="{{ old('car_name', $car->car_name) }}" 
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" 
                                       required>
                                @error('car_name')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="car_model" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Car Model</label>
                                <input type="text" name="car_model" id="car_model" 
                                       value="{{ old('car_model', $car->car_model) }}" 
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" 
                                       required>
                                @error('car_model')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="initial_charge" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Initial Charge</label>
                                <input type="number" name="initial_charge" id="initial_charge" 
                                       value="{{ old('initial_charge', $car->initial_charge) }}" 
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" 
                                       required>
                                @error('initial_charge')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="per_mil_km" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Charge per Mile/Km</label>
                                <input type="number" name="per_mil_km" id="per_mil_km" 
                                       value="{{ old('per_mil_km', $car->per_mil_km) }}" 
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" 
                                       required>
                                @error('per_mil_km')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="per_stopped_traffic" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Price Per Mintues</label>
                                <input type="number" name="per_stopped_traffic" id="per_stopped_traffic" 
                                       value="{{ old('per_stopped_traffic', $car->per_stopped_traffic) }}" 
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" 
                                       required>
                                @error('per_stopped_traffic')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="passengers" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Passengers</label>
                                <input type="number" name="passengers" id="passengers" 
                                       value="{{ old('passengers', $car->passengers) }}" 
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" 
                                       required>
                                @error('passengers')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="car_category" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Car Category</label>
                                <input type="text" name="car_category" id="car_category" 
                                       value="{{ old('car_category', $car->car_category) }}" 
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" 
                                       required>
                                @error('car_category')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="car_image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Car Image</label>
                                <input type="file" name="car_image" id="car_image" 
                                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300">
                                <img src="{{ asset($car->car_image) }}" alt="{{ $car->car_name }}" class="mt-2 w-20 h-20 object-cover rounded-full">
                                @error('car_image')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between items-center">
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                                Update Booking
                            </button>
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
