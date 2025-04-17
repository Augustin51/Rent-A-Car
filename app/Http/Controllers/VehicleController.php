<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleController
{
    public function index()
    {
        $vehicles = Vehicle::with(['type', 'equipment', 'photo'])->take(6)->get();
        return view('homePage', compact('vehicles'));
    }

    public function showAll() {
        $vehicles = Vehicle::with(['type', 'equipment', 'photo'])->get();
        $types = VehicleType::all();
        $fuelTypes = Vehicle::select('fuel_type')->distinct()->pluck('fuel_type');
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission');


        return view('vehicles', compact('vehicles', 'types', 'fuelTypes', 'transmissions'));
    }

    public function showOne($id) {
        $vehicle = Vehicle::with(['type', 'equipment', 'photo'])->find($id);

        $vehicles = Vehicle::with(['type', 'equipment', 'photo'])
            ->where('id', '!=', $id)
            ->inRandomOrder()
            ->take(6)
            ->get();

        return view('vehicle-detail', compact('vehicle', 'vehicles'));
    }

    public function rent($id) {
        $vehicle = Vehicle::with(['type', 'equipment', 'photo'])->find($id);
        /*$reservations = Reservation::with(['start_date', 'end_date'])
            ->where('vehicle_id', $id)
            ->get();*/


        return view('rent-vehicle', compact('vehicle'));
    }
}
