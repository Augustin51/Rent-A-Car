@php
    echo '<div data-typeselect="' . $typeSelect . '" id="typeSelect" class="hidden"></div>';
    echo '<div data-fueltypeselect="' . $fuelTypeSelect . '" id="fuelTypeSelect" class="hidden"></div>';
    echo '<div data-transmissionselect="' . $transmissionSelect . '" id="transmissionSelect" class="hidden"></div>';
@endphp

@extends('layouts.app')

@section('title', 'RentACar - Vehicles')

@section('content')
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
@endsection

@push('scripts')
    <script src="{{ asset('js/filterVehicles.js') }}"></script>
@endpush
