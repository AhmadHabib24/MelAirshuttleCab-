<nav x-data="{ open: true }" class="bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 w-64 fixed h-full overflow-y-auto">
    <!-- Sidebar Navigation Menu -->
    <div class="h-full flex flex-col justify-between" :class="{ 'hidden': !open }">
        <div class="px-4 py-6">
            <!-- Logo and Toggle Button -->
            <div class="shrink-0 flex items-center mb-5">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('img/logo-light.png') }}" alt="Logo">
                </a>
                <button @click="open = !open" class="ml-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                    <i :class="open ? 'fas fa-chevron-left' : 'fas fa-chevron-right'"></i>
                </button>
            </div>
            <hr style="color: white;margin-bottom: 5px;">

            <style>
                .nav-link {
                    font-weight: 600; /* Font weight for nav links */
                    color: white; /* Default text color */
                    transition: background-color 0.3s, color 0.3s, padding 0.3s; /* Smooth transition */
                    padding: 10px; /* Default padding */
                }
                .nav-link:hover, .nav-link.active {
                    color: black; /* Text color on hover */
                    background: whitesmoke; /* Background color on hover */
                    border: 2px solid white; /* Border on hover */
                    border-radius: 10px; /* Rounded corners on hover */
                }
            </style>

            <!-- Navigation Links -->
            <ul class="space-y-4">
                <li>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt mr-2"></i>{{ __('Admin Dashboard') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('cab-booking')" :active="request()->routeIs('cab-booking')" class="nav-link {{ request()->routeIs('cab-booking') ? 'active' : '' }}">
                        <i class="fas fa-car mr-2"></i>{{ __('Cab Booking Information') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('direct-booking.view')" :active="request()->routeIs('direct-booking.view')" class="nav-link {{ request()->routeIs('direct-booking.view') ? 'active' : '' }}">
                        <i class="fas fa-upload mr-2"></i>{{ __('Upload Predefine Booking') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('category-booking.index')" :active="request()->routeIs('category-booking.index')" class="nav-link {{ request()->routeIs('category-booking.index') ? 'active' : '' }}">
                        <i class="fas fa-bookmark mr-2"></i>{{ __('Direct Client Booking ') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('admin.our-service.loadView')" :active="request()->routeIs('admin.our-service.loadView')" class="nav-link {{ request()->routeIs('admin.our-service.loadView') ? 'active' : '' }}">
                        <i class="fas fa-concierge-bell mr-2"></i>{{ __('Our Services Information') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('admin.about.adminview')" :active="request()->routeIs('admin.about.adminview')" class="nav-link {{ request()->routeIs('admin.about.adminview') ? 'active' : '' }}">
                        <i class="fas fa-info-circle mr-2"></i>{{ __('About Us Information') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('contacts.index')" :active="request()->routeIs('contacts.index')" class="nav-link {{ request()->routeIs('contacts.index') ? 'active' : '' }}">
                        <i class="fas fa-envelope mr-2"></i>{{ __('Contact Us Information') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link :href="route('admin.testimonials.index')" :active="request()->routeIs('admin.testimonials.index')" class="nav-link {{ request()->routeIs('admin.testimonials.index') ? 'active' : '' }}">
                        <i class="fas fa-comments mr-2"></i>{{ __('Client Testimonials') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link  :active="request()->routeIs('admin.fare-estimate')" class="nav-link {{ request()->routeIs('admin.fare-estimate') ? 'active' : '' }}">
                        <i class="fas fa-calculator mr-2"></i>{{ __('Fare Estimate') }}
                    </x-nav-link>
                </li>
            </ul>

            <!-- Settings Dropdown moved here -->
            <div class="mt-1">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="ml-64 p-6" :class="{ 'ml-0': !open }">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Your page content goes here -->
        @yield('content')
    </div>
</div>
