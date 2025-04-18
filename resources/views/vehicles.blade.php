@php
    echo '<div data-typeselect="' . $typeSelect . '" id="typeSelect" class="hidden"></div>';
    echo '<div data-fueltypeselect="' . $fuelTypeSelect . '" id="fuelTypeSelect" class="hidden"></div>';
    echo '<div data-transmissionselect="' . $transmissionSelect . '" id="transmissionSelect" class="hidden"></div>';
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Rental - Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">

<header class="flex justify-between items-center px-8 py-4 shadow-md bg-white">
    <a href="/" class="flex items-center space-x-2">
        <i class="fas fa-car text-2xl text-black"></i>
        <span class="font-semibold text-sm text-black">Car Rental</span>
    </a>

    <nav class="hidden md:flex space-x-6">
        <a href="/" class="text-sm font-normal text-gray-800 hover:text-black">Home</a>
        <a href="/vehicles" class="text-sm font-bold text-black">Vehicles</a>
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
    <h2 class="text-2xl font-semibold text-center mb-6">Select a vehicle group</h2>

    <div class="flex flex-wrap justify-center gap-3 mb-8">
        <button data-type="" class="type border bg-purple-600 text-white text-sm px-4 py-2 rounded-full">All Vehicles</button>
        @foreach($types as $type)
            <button data-type="{{ $type->name }}" class="type border text-sm px-4 py-2 rounded-full">{{ $type->name }}</button>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-8">
        <button data-fuelType="" class="fuel-type border bg-purple-600 text-white text-sm px-4 py-2 rounded-full">All Energy type</button>
        @foreach($fuelTypes as $fuelType)
            <button data-fueltype="{{ $fuelType }}" class="fuel-type border text-sm px-4 py-2 rounded-full">{{ $fuelType }}</button>
        @endforeach
    </div>

    <div class="flex flex-wrap justify-center gap-3 mb-8">
        <button data-transmission="" class="transmission border bg-purple-600 text-white text-sm px-4 py-2 rounded-full">All Type of gear</button>
        @foreach($transmissions as $transmission)
            <button data-transmission="{{ $transmission }}" class="transmission border text-sm px-4 py-2 rounded-full">{{ $transmission }}</button>
        @endforeach
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($vehicles as $vehicle)
            <div class="bg-white rounded-2xl shadow p-4 flex flex-col">
                <img src="{{ asset(optional($vehicle->photos)->first()->image_url ?? 'images/placeholderVehicle.png') }}"
                     alt="Car Image"
                     class="rounded-md mb-4 h-40 w-full object-cover">

                <div class="flex justify-between items-center mb-1">
                    <h3 class="text-lg font-semibold">{{ $vehicle->brand }}</h3>
                    <div class="text-right">
                        <span class="text-purple-600 font-bold text-lg">${{ $vehicle->price_per_day }}</span>
                        <div class="text-xs text-gray-500">per day</div>
                    </div>
                </div>

                <div class="text-sm text-gray-600 mb-3">{{ $vehicle->type->name }}</div>

                <div class="flex items-center gap-4 text-sm text-gray-700 mb-4">
                    <div class="flex items-center gap-1">
                        <i class="fa-solid fa-gear"></i>
                        <span>{{ ucfirst($vehicle->transmission) }}</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <i class="fa-solid fa-gas-pump"></i>
                        <span>{{ ucfirst($vehicle->fuel_type) }}</span>
                    </div>
                    @if($vehicle->air_conditioning == '1')
                        <div class="flex items-center gap-1">
                            <i class="fa-solid fa-snowflake"></i>
                            <span>Air Conditioner</span>
                        </div>
                    @endif
                </div>

                <a href="/vehicle/{{ $vehicle->id }}"
                   class="mt-auto w-full inline-block text-center bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                    View Details
                </a>
            </div>
        @endforeach
    </div>


    <div class="flex justify-center items-center gap-10 my-12 py-6 px-4 bg-gray-50 rounded-xl opacity-80">
        <img src="images/toyota.svg" alt="Toyota" class="h-6">
        <img src="images/ford.svg" alt="Ford" class="h-6">
        <img src="images/mercedes.svg" alt="Mercedes" class="h-6">
        <img src="images/jeep.svg" alt="Jeep" class="h-6">
        <img src="images/bmw.svg" alt="BMW" class="h-6">
        <img src="images/audi.svg" alt="Audi" class="h-6">
    </div>

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

<script src="{{ asset('js/filterVehicles.js') }}"></script>
</body>
</html>
