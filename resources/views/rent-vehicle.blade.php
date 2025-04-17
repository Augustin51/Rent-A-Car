<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Rental - Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>
<body class="bg-white text-gray-900">

<header class="flex justify-between items-center px-8 py-4 shadow-md bg-white">
    <a href="/" class="flex items-center space-x-2">
        <i class="fas fa-car text-2xl text-black"></i>
        <span class="font-semibold text-sm text-black">Car Rental</span>
    </a>

    <nav class="hidden md:flex space-x-6">
        <a href="/" class="text-sm font-normal text-gray-800 hover:text-black">Home</a>
        <a href="/vehicles" class="text-sm font-normal text-gray-800 hover:text-black">Vehicles</a>
        <a href="/vehicle/{{ $vehicle->id }}" class="text-sm font-normal text-gray-800 hover:text-black">Details</a>
        <a href="/rent/{{ $vehicle->id }}" class="text-sm font-bold text-black">Reservation</a>
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
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h1 class="text-2xl font-bold text-center mb-12">Reservation</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <div>
                <h2 class="text-2xl font-semibold">{{ $vehicle->brand }}</h2>
                <p class="text-purple-600 text-xl font-bold mt-2">$<span id="price-per-day">{{ $vehicle->price_per_day }} </span><span class="text-sm text-gray-500">/day</span></p>

                <img src="{{ asset(optional($vehicle->photo[0]->image_url)->first()->image_url ?? 'images/placeholderVehicle.png') }}"
                     alt="Vehicle Image"
                     class="w-full h-60 object-contain my-6">

                <div class="flex gap-3">
                    @foreach($vehicle->photo as $photo)
                        <img src="/storage/{{ $photo->image_url }}"
                             alt="Vehicle Thumbnail"
                             class="w-20 h-20 object-cover rounded-md">
                    @endforeach
                </div>
            </div>

            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <form id="reservation-form" class="space-y-4" novalidate>
                    <small id="reservation-message" class="block text-sm font-medium text-center px-4 py-2 rounded-md bg-gray-100 text-gray-700 hidden"></small>

                    @csrf
                    <div>
                        <label for="start_date">Start date</label>
                        <input type="date" name="start_date" id="start_date" class="w-full px-4 py-2 border rounded-md text-sm">
                    </div>
                    <div>
                        <label for="end_date">End date</label>
                        <input type="date" name="end_date" id="end_date" class="w-full px-4 py-2 border rounded-md text-sm">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-2 border rounded-md text-sm">
                    </div>
                    <div class="text-sm text-gray-700">Total Price: <strong>${{ $vehicle->price_per_day }} x days</strong></div>
                    <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-md">Book Now</button>
                </form>

            </div>
        </div>
    </section>

    <section class="bg-purple-600 text-white py-4 px-6 mt-20 rounded-3xl max-w-6xl mx-auto relative overflow-hidden"
             style="background-image: url('{{ asset('images/backgroundHome.svg') }}'); background-size: cover;">
        <div class="grid md:grid-cols-2 items-center relative z-10">
            <div>
                <h2 class="text-2xl font-bold mb-2">Looking for a car?</h2>
                <p class="text-lg font-semibold mb-1">+537 547-6401</p>
                <p class="text-sm mb-4 max-w-md">Armet amet duo sea lorem. Rebum ipsum amet lorem sit kasd est dolor ipsum duo ipsum.</p>
                <button class="bg-orange-400 hover:bg-orange-500 px-5 py-2 rounded-lg shadow">Book now</button>
            </div>
            <div class="flex justify-end">
                <img src="{{ asset('images/carHome.png') }}" class="" alt="Car">
            </div>
        </div>
    </section>
    <div data-idvehicle="{{ $vehicle->id }}" id="id-vehicle"></div>
</main>
<footer class="bg-white border-t py-10 px-4 text-gray-700 text-sm">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 items-start text-center md:text-left">

        <div class="flex items-center justify-center md:justify-start space-x-2">
            <i class="fas fa-car text-xl text-black"></i>
            <span class="font-semibold">Car Rental</span>
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
                    nwilger@yahoo.com
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
        © Copyright Car Rental 2024. Design by Figma.guru
    </div>
</footer>

<script src="{{ asset('js/flatpickr.js') }}"></script>
<script src="{{ asset('js/reservation.js') }}"></script>
</body>
</html>
