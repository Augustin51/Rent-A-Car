@extends('layouts.app')

@section('title', 'RentACar - HomePage')

@section('content')
    <section class="relative bg-purple-600 text-white py-16 px-6 rounded-3xl overflow-hidden">
        <img src="{{ asset('images/backgroundHome.svg') }}" alt="Tire track"
             class="absolute inset-0 w-full h-full object-cover opacity-10 pointer-events-none" />

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 relative z-10 items-center">
            <div class="space-y-6">
                <h1 class="text-4xl font-extrabold leading-snug">
                    Experience the road<br>like never before
                </h1>
                <p class="text-base max-w-md">
                    Rent a car in just a few taps. Fast, flexible, and affordable,
                    your next ride is always ready, wherever and whenever you need it.
                </p>
                <a href="/vehicles"
                   class="inline-block bg-orange-400 hover:bg-orange-500 text-white font-semibold py-2 px-6 rounded-lg shadow transition">
                    View all cars
                </a>
            </div>

            <div class="bg-white text-black p-6 rounded-xl shadow-md w-full max-w-md mx-auto">
                <h3 class="text-lg font-semibold mb-4 text-center">Book your car</h3>
                <form action="/vehicles" method="post" class="space-y-4">
                    @csrf

                    <select name="type" class="w-full border rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="all">All Vehicle type</option>
                        @foreach($types as $type)
                            <option value="{{ $type->name }}">{{ $type->name }}</option>
                        @endforeach
                    </select>

                    <select name="fuel_type" class="w-full border rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="all">All Energy Type</option>
                        @foreach($fuelTypes as $fuelType)
                            <option value="{{ $fuelType }}">{{ $fuelType }}</option>
                        @endforeach
                    </select>

                    <select name="transmission" class="w-full border rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                        <option value="all">All Type of gear</option>
                        @foreach($transmissions as $transmission)
                            <option value="{{ $transmission }}">{{ $transmission }}</option>
                        @endforeach
                    </select>

                    <button type="submit"
                            class="w-full bg-orange-400 hover:bg-orange-500 text-white font-semibold py-2 rounded-md transition">
                        Book now
                    </button>
                </form>

            </div>
        </div>

        <img src="{{ asset('images/carHome.png') }}"
             alt="Car"
             class="absolute bottom-10 right-1/3 w-80 max-w-full opacity-80 z-0 hidden md:block" />
    </section>

    <section class="max-w-6xl mx-auto py-16 px-6 grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
        <div>
            <div class="text-4xl text-black mb-4">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <h4 class="text-lg font-semibold mb-2">Availability</h4>
            <p class="text-gray-600 text-sm">
                A wide range of vehicles, available anytime,<br>
                wherever you need them.
            </p>
        </div>

        <div>
            <div class="text-4xl text-black mb-4">
                <i class="fas fa-car-side"></i>
            </div>
            <h4 class="text-lg font-semibold mb-2">Comfort</h4>
            <p class="text-gray-600 text-sm">
                Enjoy a smooth, relaxing drive with clean,<br>
                modern, well-equipped cars.
            </p>
        </div>

        <div>
            <div class="text-4xl text-black mb-4">
                <i class="fas fa-wallet"></i>
            </div>
            <h4 class="text-lg font-semibold mb-2">Savings</h4>
            <p class="text-gray-600 text-sm">
                Smart prices, no hidden fees — only pay when<br>
                you actually drive.
            </p>
        </div>
    </section>


    <section class="bg-gray-100 py-16 px-8">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Choose the car that suits you</h2>
                <a href="/vehicles" class="text-purple-600 font-medium">View All →</a>
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
        </div>
    </section>
@endsection
