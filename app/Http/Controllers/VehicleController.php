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

        $types = VehicleType::all();
        $fuelTypes = Vehicle::select('fuel_type')->distinct()->pluck('fuel_type');
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission');

        return view('homePage', compact('vehicles', 'types', 'fuelTypes', 'transmissions'));
    }

    public function showAll(Request $request)
    {
        $typeSelect = 'all';
        $fuelTypeSelect = 'all';
        $transmissionSelect = 'all';

        if ($request->isMethod('post')) {
            $typeSelect = $request["type"];
            $fuelTypeSelect = $request["fuel_type"];
            $transmissionSelect = $request["transmission"];

            $vehicles = Vehicle::with(['type', 'equipment', 'photo'])
                ->when($typeSelect != 'all', function ($query) use ($typeSelect) {
                    $query->whereHas('type', function ($subQuery) use ($typeSelect) {
                        $subQuery->where('name', $typeSelect);
                    });
                })
                ->when($fuelTypeSelect != 'all', function ($query) use ($fuelTypeSelect) {
                    $query->where('fuel_type', $fuelTypeSelect);
                })
                ->when($transmissionSelect != 'all', function ($query) use ($transmissionSelect) {
                    $query->whereIn('transmission', (array) $transmissionSelect);
                })
                ->get();
        }  else {
            $vehicles = Vehicle::with(['type', 'equipment', 'photo'])->get();
        }
        $types = VehicleType::all();
        $fuelTypes = Vehicle::select('fuel_type')->distinct()->pluck('fuel_type');
        $transmissions = Vehicle::select('transmission')->distinct()->pluck('transmission');

        return view('vehicles', compact('vehicles', 'types', 'fuelTypes', 'transmissions', 'typeSelect', 'fuelTypeSelect', 'transmissionSelect'));
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

        return view('rent-vehicle', compact('vehicle'));
    }
}
