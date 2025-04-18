<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'RentACar')</title>
    <link rel="icon" href="{{ asset('images/logoRentACar.svg') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<body class="bg-white text-gray-900">

<header class="flex justify-between items-center px-8 py-4 shadow-md bg-white">
    <a href="/" class="flex items-center space-x-2">
        <img src="{{ asset('images/logoRentACar.svg') }}" alt="website logo (car)">
        <span class="font-semibold text-sm text-black">RentACar</span>
    </a>

    <nav class="hidden md:flex space-x-6">
        <a href="/" class="text-sm font-bold text-black">Home</a>
        <a href="/vehicles" class="text-sm font-normal text-gray-800 hover:text-black">Vehicles</a>
        <a href="/vehicles" class="text-sm font-normal text-gray-800 hover:text-black">Details</a>
        <a href="/vehicles" class="text-sm font-normal text-gray-800 hover:text-black">Reservation</a>
    </nav>

    <div class="flex items-center space-x-2">
        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-indigo-600 text-white">
            <i class="fas fa-phone-alt text-xs"></i>
        </div>
        <div class="text-xs leading-tight">
            <p class="text-gray-500">Need help?</p>
            <p class="font-semibold text-black text-sm">+996 247-1680</p>
        </div>
    </div>
</header>

<main class="max-w-7xl mx-auto py-10 px-4">
    @yield('content')
</main>

<footer class="bg-white border-t py-10 px-4 text-gray-700 text-sm">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 items-start text-center md:text-left">

        <div class="flex items-center justify-center md:justify-start space-x-2">
            <img src="{{ asset('images/logoRentACar.svg') }}" alt="website logo (car)">
            <span class="font-semibold">RentACar</span>
        </div>

        <div class="flex flex-col items-center md:items-start space-y-1">
            <div class="flex items-center space-x-2">
                <i class="fas fa-map-marker-alt text-orange-500"></i>
                <div>
                    <strong>Address</strong><br>
                    Oxford Ave. Cary, NC 27511
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center md:items-start space-y-1">
            <div class="flex items-center space-x-2">
                <i class="fas fa-envelope text-orange-500"></i>
                <div>
                    <strong>Email</strong><br>
                    rentacar@gmail.com
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center md:items-start space-y-1">
            <div class="flex items-center space-x-2">
                <i class="fas fa-phone text-orange-500"></i>
                <div>
                    <strong>Phone</strong><br>
                    +537 547-6401
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-10 text-xs text-gray-500">
        © Copyright RentACar 2025
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.tailwindcss.com"></script>
@stack('scripts')
</body>
</html>
