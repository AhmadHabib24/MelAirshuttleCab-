<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Offer') }}
        </h2>
        <!-- Back Button -->
        <div class="flex justify-end">
            <a href="{{ route('direct-booking.view') }}" class="ml-4 text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100 mb-5">Add Offer</h3>

                    <form action="{{ route('direct-booking.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Update grid layout to 2 columns -->
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="car_name" class="block text-sm font-medium text-gray-300">Car Name</label>
                                <input type="text" name="car_name" id="car_name" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                            </div>

                            <div>
                                <label for="car_model" class="block text-sm font-medium text-gray-300">Car Model</label>
                                <input type="text" name="car_model" id="car_model" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                            </div>

                            <div>
                                <label for="initial_charge" class="block text-sm font-medium text-gray-300">Initial Charge</label>
                                <input type="text" name="initial_charge" id="initial_charge" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                            </div>

                            <div>
                                <label for="per_mil_km" class="block text-sm font-medium text-gray-300">Charge Per KM/Mile</label>
                                <input type="text" name="per_mil_km" id="per_mil_km" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                            </div>

                            <div>
                                <label for="per_stopped_traffic" class="block text-sm font-medium text-gray-300">Price Per Mintues</label>
                                <input type="text" name="per_stopped_traffic" id="per_stopped_traffic" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                            </div>

                            <div>
                                <label for="passengers" class="block text-sm font-medium text-gray-300">Passengers</label>
                                <input type="text" name="passengers" id="passengers" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                            </div>

                            <div>
                                <label for="car_category" class="block text-sm font-medium text-gray-300">Category</label>
                                <select name="car_category" id="car_category" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                                    <option value="" disabled selected>Select a category</option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            

                            <div>
                                <label for="car_image" class="block text-sm font-medium text-gray-300">Car Image</label>
                                <input type="file" name="car_image" id="car_image" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                            </div>

                            <div class="col-span-2">
                                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
