<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Testimonial') }}
        </h2>
        <!-- Back Button -->
        <div class="flex justify-end">
            <a href="{{ route('admin.testimonials.index') }}" class="ml-4 text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded">
                <i class="fas fa-arrow-left"></i> Back to Testimonials
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100 mb-5">Add Testimonial</h3>

                    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="author_name" class="block text-sm font-medium text-gray-300">Author Name</label>
                                <input type="text" name="author_name" id="author_name" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                                @error('author_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="author_title" class="block text-sm font-medium text-gray-300">Title</label>
                                <input type="text" name="author_title" id="author_title" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required>
                                @error('author_title')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="content" class="block text-sm font-medium text-gray-300">Content</label>
                                <textarea name="content" id="content" rows="4" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md" required></textarea>
                                @error('content')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="author_image" class="block text-sm font-medium text-gray-300">Author Image (Optional)</label>
                                <input type="file" name="author_image" id="author_image" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md">
                                @error('author_image')
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
