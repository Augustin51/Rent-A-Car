@extends('layouts.app')

@section('title', 'RentACar - Reservation')

@section('content')
    <section class="max-w-6xl mx-auto px-6 py-16">
        <h1 class="text-2xl font-bold text-center mb-12">Reservation</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
            <div>
                <h2 class="text-2xl font-semibold">{{ $vehicle->brand }}</h2>
                <p class="text-purple-600 text-xl font-bold mt-2">
                    $<span id="price-per-day">{{ $vehicle->price_per_day }}</span>
                    <span class="text-sm text-gray-500">/day</span>
                </p>

                @php
                    $photoPath = $vehicle->photo->first()->image_url ?? null;
                    $exists = $photoPath && file_exists(public_path($photoPath));
                    $photoUrl = $exists ? $photoPath : 'images/placeholderVehicle.png';
                @endphp

                <img src="{{ asset($photoUrl) }}"
                     alt="{{ $vehicle->brand }}"
                     data-main-image
                     data-group="vehicle-photos-{{ $vehicle->id }}"
                     class="rounded-md mb-4 h-72 w-full object-cover">

                <div class="grid grid-cols-4 gap-3">
                    @foreach($vehicle->photo as $photo)
                        <img src="{{ asset($photo->image_url) }}"
                             alt="{{ $vehicle->brand }}"
                             data-image-src="{{ asset($photo->image_url) }}"
                             data-group="vehicle-photos-{{ $vehicle->id }}"
                             class="w-full h-24 rounded-md object-cover ring-1 ring-gray-200 hover:ring-purple-500 cursor-pointer">
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
                    <div class="text-sm text-gray-700">
                        Total Price: <strong>${{ $vehicle->price_per_day }} x days</strong>
                    </div>
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
@endsection

@push('scripts')
    <script src="{{ asset('js/flatpickr.js') }}"></script>
    <script src="{{ asset('js/reservation.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
@endpush
