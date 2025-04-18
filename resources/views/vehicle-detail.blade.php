@extends('layouts.app')

@section('title', 'RentACar - Detail')

@section('content')
    <div class="container mx-auto px-4 py-8">

        <div class="mb-12">
            <h1 class="text-2xl font-bold text-black">{{ $vehicle->brand }}</h1>
            <p class="text-purple-600 text-xl font-semibold mt-1">${{ $vehicle->price_per_day }}
                <span class="text-sm text-gray-400">/ day</span>
            </p>

            <div class="flex flex-col md:flex-row gap-10 mt-6">
                <div class="flex-1">
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

                    <div class="grid grid-cols-4 gap-3 mt-4">
                        @foreach($vehicle->photo as $photo)
                            <img src="{{ asset($photo->image_url) }}"
                                 alt="{{ $vehicle->brand }}"
                                 data-image-src="{{ asset($photo->image_url) }}"
                                 data-group="vehicle-photos-{{ $vehicle->id }}"
                                 class="w-full h-24 rounded-md object-cover ring-1 ring-gray-200 hover:ring-purple-500 cursor-pointer">
                        @endforeach
                    </div>
                </div>

                <div class="flex-1">
                    <h2 class="text-md font-semibold mb-4">Technical Specification</h2>
                    <div class="grid grid-cols-3 gap-4 text-sm text-black">
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                            <i class="fas fa-cogs text-lg mb-2 block"></i>
                            <strong class="block text-sm">Gear Box</strong>
                            <span>{{ $vehicle->transmission }}</span>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                            <i class="fas fa-gas-pump text-lg mb-2 block"></i>
                            <strong class="block text-sm">Energy Type</strong>
                            <span>{{ $vehicle->fuel_type }}</span>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                            <i class="fas fa-car text-lg mb-2 block"></i>
                            <strong class="block text-sm">Type</strong>
                            <span>{{ $vehicle->type->name }}</span>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                            <i class="fas fa-door-open text-lg mb-2 block"></i>
                            <strong class="block text-sm">Doors</strong>
                            <span>{{ $vehicle->doors }}</span>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                            <i class="fas fa-snowflake text-lg mb-2 block"></i>
                            <strong class="block text-sm">Air Conditioner</strong>
                            <span>{{ $vehicle->air_conditioning ? 'Yes' : 'No' }}</span>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                            <i class="fas fa-users text-lg mb-2 block"></i>
                            <strong class="block text-sm">Seats</strong>
                            <span>{{ $vehicle->seats }}</span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="/reservation/{{ $vehicle->id }}"
                           class="bg-purple-600 text-white text-sm py-2 px-6 rounded-md hover:bg-purple-700 transition">
                            Rent a car
                        </a>
                    </div>

                    <h3 class="mt-8 text-md font-semibold">Car Equipment</h3>
                    <div class="grid grid-cols-2 gap-2 text-sm mt-2">
                        @foreach($vehicle->equipment as $item)
                            <div class="flex items-center space-x-2 text-gray-800">
                                <i class="fas fa-check-circle text-purple-600 text-sm"></i>
                                <span>{{ $item->name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-bold">Other cars</h2>
                <a href="/vehicles" class="text-purple-600 hover:underline">View All →</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($vehicles as $v)
                    <div class="bg-white rounded-2xl shadow p-4 flex flex-col">
                        <img src="{{ asset(optional($v->photo)->first()->image_url ?? 'images/placeholderVehicle.png') }}"
                             alt="Car Image"
                             class="rounded-md mb-4 h-40 w-full object-cover">

                        <div class="flex justify-between items-center mb-1">
                            <h3 class="text-lg font-semibold">{{ $v->brand }}</h3>
                            <div class="text-right">
                                <span class="text-purple-600 font-bold text-lg">${{ $v->price_per_day }}</span>
                                <div class="text-xs text-gray-500">per day</div>
                            </div>
                        </div>

                        <div class="text-sm text-gray-600 mb-3">{{ $v->type->name }}</div>

                        <div class="flex items-center gap-4 text-sm text-gray-700 mb-4">
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-gear"></i>
                                <span>{{ ucfirst($v->transmission) }}</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <i class="fa-solid fa-gas-pump"></i>
                                <span>{{ ucfirst($v->fuel_type) }}</span>
                            </div>
                            @if($v->air_conditioning == '1')
                                <div class="flex items-center gap-1">
                                    <i class="fa-solid fa-snowflake"></i>
                                    <span>Air Conditioner</span>
                                </div>
                            @endif
                        </div>

                        <a href="/vehicle/{{ $v->id }}"
                           class="mt-auto w-full inline-block text-center bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
                            View Details
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/carousel.js') }}"></script>
@endpush
