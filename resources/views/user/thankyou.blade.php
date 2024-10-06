@extends('user.layouts.app')

@section('title', 'Thank You')

<style>
    .thank-you-section {
        text-align: center;
        padding: 50px;
    }
</style>

@section('body')
    <div class="thank-you-section">
        <h1>Thank You for Your Booking!</h1>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @else
            <p>We appreciate your interest. Please check your details and try again.</p>
        @endif
        <a href="{{ route('home') }}" class="default-btn">Return to Home</a>
    </div>
    

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
