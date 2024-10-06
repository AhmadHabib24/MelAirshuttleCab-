<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles for Layout -->
    <style>
        /* Ensure content doesn't overlap with navigation */
        .main-content {
            padding-left: 250px; /* Adjust this to the width of the navigation */
            padding-top: 20px;
        }
        .header {
            padding-left: 250px; /* Adjust header to account for navigation width */
        }

        /* Ensure background doesn't repeat */
        body {
            background-image: url('{{ asset('img/bg-1.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat; /* Prevents background repetition */
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    
    <!-- Include the Navigation -->
    @include('layouts.navigation')

    <!-- Page Heading -->
    {{-- @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif --}}

    <!-- Page Content -->
    <main class="main-content">
        {{ $slot }}
    </main>

    <!-- Toastr JS for Notifications -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Toastr Notifications -->
    <script>
        $(document).ready(function() {
            @if (session('success'))
                toastr.success('{{ session('success') }}');
            @elseif (session('error'))
                toastr.error('{{ session('error') }}');
            @endif
        });
    </script>
</body>
</html>
