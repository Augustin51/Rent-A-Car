<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Rental - Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-gray-900">

<!-- Header -->
<header class="flex justify-between items-center px-6 py-4 shadow-md">
    <div class="text-xl font-bold">🚗 Car Rental</div>
    <nav class="space-x-4">
        <a href="#" class="text-sm font-medium">Vehicles</a>
    </nav>
    <div>
        <span class="text-sm font-medium mr-2">Need help?</span>
        <span class="text-sm text-gray-600">+234 907 234 3210</span>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-purple-600 text-white py-16 px-8 relative">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
            <h1 class="text-4xl font-bold mb-4">Experience the road like never before</h1>
            <p class="text-lg mb-6">Book your car today. Flexible rentals, new models, and the best deals all year long.</p>
            <button class="bg-orange-400 text-white px-6 py-3 rounded-lg shadow hover:bg-orange-500 transition">Start Renting</button>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-black">
            <h3 class="text-lg font-semibold mb-4">Book your car</h3>
            <form class="space-y-3">
                <input type="text" placeholder="Location" class="w-full px-4 py-2 border rounded-md">
                <input type="date" placeholder="Pickup Date" class="w-full px-4 py-2 border rounded-md">
                <input type="date" placeholder="Dropoff Date" class="w-full px-4 py-2 border rounded-md">
                <button class="w-full bg-purple-600 text-white py-2 rounded-md hover:bg-purple-700">Book Now</button>
            </form>
        </div>
    </div>
</section>

<!-- Features -->
<section class="max-w-6xl mx-auto py-16 px-8 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
    <div>
        <div class="text-3xl mb-2">📅</div>
        <h4 class="font-bold mb-2">Availability</h4>
        <p>A wider selection of vehicles, more available dates.</p>
    </div>
    <div>
        <div class="text-3xl mb-2">🛋️</div>
        <h4 class="font-bold mb-2">Comfort</h4>
        <p>Enjoy a smooth ride with luxury interiors and modern comforts.</p>
    </div>
    <div>
        <div class="text-3xl mb-2">💰</div>
        <h4 class="font-bold mb-2">Savings</h4>
        <p>Great deals, low prices, no hidden fees.</p>
    </div>
</section>

<!-- Vehicle List -->
<section class="bg-gray-100 py-16 px-8">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Choose the car that suits you</h2>
            <a href="#" class="text-purple-600 font-medium">View All →</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($vehicles as $vehicle)
                <div class="bg-white rounded-xl shadow p-4">
                    <img src="{{ asset(optional($vehicle->photos)->first()->image_url ?? 'images/placeholderVehicle.png') }}" alt="Car Image" class="rounded-md mb-4 h-40 w-full object-cover">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-lg font-semibold">{{ $vehicle->brand }}</h3>
                        <span class="text-purple-600 font-bold">${{ $vehicle->price_per_day }}</span>
                    </div>
                    <div class="text-sm text-gray-600 mb-2">{{ $vehicle->year }} • {{ $vehicle->transmission }} • {{ $vehicle->fuel_type }}</div>
                    <div class="text-sm text-gray-500 mb-4">
                        @foreach ($vehicle->equipment as $equipment)
                            <span>{{ $equipment->name }}@if (!$loop->last), @endif</span>
                        @endforeach
                    </div>
                    <a href="#" class="w-full inline-block text-center bg-purple-600 text-white py-2 rounded hover:bg-purple-700 transition">View Details</a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-white border-t py-6 px-8 text-sm text-gray-600">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between">
        <div>🚗 Car Rental</div>
        <div>
            <p>Address: 00045 NYC, City, NY 1211</p>
            <p>Email: carrentalsupport@email.com</p>
            <p>Phone: +234 907 234 3210</p>
        </div>
    </div>
    <div class="text-center mt-4 text-xs">© 2025 Car Rental. All rights reserved.</div>
</footer>

</body>
</html>
