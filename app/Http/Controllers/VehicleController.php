<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleController extends Controller
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

    public function getType(): false|string
    {
        var_dump('df');
        $data = json_decode(file_get_contents('php://input'));

        return json_encode(['success' => true, 'type' => $data->type]);
    }
}
