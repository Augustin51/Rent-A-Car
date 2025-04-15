<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::with(['type', 'equipment', 'photo'])->take(6)->get();
        return view('homePage', compact('vehicles'));
    }
}
