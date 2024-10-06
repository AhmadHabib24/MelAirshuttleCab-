<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Services') }}
        </h2>
        <!-- Back Button -->
        <div class="flex justify-end">
            <a href="{{ route('admin.our-service.loadView') }}" class="ml-4 text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                <i class="fas fa-arrow-left"></i> Back to Services
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100 mb-5">Add Service</h3>

                    <form action="{{ route('admin.our-service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-300">Service Title</label>
                                <input type="text" name="title" id="title" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                                @error('title')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                                <textarea name="description" id="description" rows="4" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required></textarea>
                                @error('description')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-300">Service Image (Optional)</label>
                                <input type="file" name="image" id="image" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md">
                                @error('image')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
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
