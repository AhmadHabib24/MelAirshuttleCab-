<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Car Category') }}
        </h2>
        <!-- Back Button -->
        <div class="flex justify-end">
            <a href="{{ route('car-category.view') }}" class="ml-4 text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100 mb-5">Add Car Category</h3>

                    <form action="{{ route('car-category.store') }}" method="POST" >
                        @csrf
                        <!-- Update grid layout to 2 columns -->
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <label for="car_category" class="block text-sm font-medium text-gray-300">Category Name</label>
                                <input type="text" name="car_category" id="car_category" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
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
