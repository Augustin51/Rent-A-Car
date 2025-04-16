<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Rental - Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">

<header class="flex justify-between items-center px-6 py-4 shadow-md">
    <div class="text-xl font-bold">🚗 Car Rental</div>
    <nav class="space-x-4 hidden md:flex">
        <a href="#" class="text-sm font-medium">Home</a>
        <a href="#" class="text-sm font-medium">Vehicles</a>
        <a href="#" class="text-sm font-medium">Drivers</a>
        <a href="#" class="text-sm font-medium">Contact</a>
        <a href="#" class="text-sm font-medium">About Us</a>
    </nav>
    <div class="text-sm font-medium">
        Need help? <span class="text-gray-600 ml-2">+234 907 234 3210</span>
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
                <div class="bg-white rounded-xl shadow p-4">
                    <img src="{{ asset(optional($vehicle->photos)->first()->image_url ?? 'images/placeholderVehicle.png') }}" alt="Car Image" class="rounded-md mb-4 h-40 w-full object-cover">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-lg font-semibold">{{ $vehicle->brand }}</h3>
                        <span class="text-purple-600 font-bold">${{ $vehicle->price_per_day }}</span>
                    </div>
                    <div class="text-sm text-gray-600 mb-2">
                        {{ $vehicle->year }} • {{ $vehicle->transmission }} • {{ $vehicle->fuel_type }}
                    </div>
                    <div class="text-sm text-gray-500 mb-4">
                        @foreach ($vehicle->equipment as $equipment)
                            <span>{{ $equipment->name }}@if (!$loop->last), @endif</span>
                        @endforeach
                    </div>
                    <a href="#" class="w-full inline-block text-center bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition">
                        View Details
                    </a>
                </div>
            @endforeach
        </div>

    <div class="flex justify-center items-center gap-10 my-12 opacity-70">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Toyota_logo.svg" alt="Toyota" class="h-6">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Ford_logo_flat.svg" alt="Ford" class="h-6">
        <span class="text-lg font-bold">Jeep</span>
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/90/Mercedes-Logo.svg" alt="Mercedes" class="h-6">
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Audi_logo.svg" alt="Audi" class="h-6">
    </div>
</main>

<footer class="bg-white border-t py-6 px-8 text-sm text-gray-600">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-4">
        <div>🚗 Car Rental</div>
        <div>
            <p>Address: 00045 NYC, City, NY 1211</p>
            <p>Email: carrentalsupport@email.com</p>
            <p>Phone: +234 907 234 3210</p>
        </div>
    </div>
    <div class="text-center mt-4 text-xs">© 2025 Car Rental. All rights reserved.</div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
