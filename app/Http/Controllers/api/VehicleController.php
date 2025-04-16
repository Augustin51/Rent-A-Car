<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index() {
        $data = json_decode(file_get_contents('php://input'));

        $type = $data->type;
        $fuelType = $data->fuelType;
        $transmission = $data->transmission;

        /*var_dump($type);
        var_dump($fuelType);
        var_dump($transmissions);*/

        $vehicles = Vehicle::with(['type', 'equipment', 'photo'])
            ->when(!empty($type), function ($query) use ($type) {
                $query->whereHas('type', function ($subQuery) use ($type) {
                    $subQuery->where('name', $type);
                });
            })
            ->when(!empty($fuelType), function ($query) use ($fuelType) {
                $query->where('fuel_type', $fuelType);
            })
            ->when(!empty($transmission), function ($query) use ($transmission) {
                $query->whereIn('transmission', (array) $transmission);
            })
            ->get();

        return response()->json([
            'success' => true,
            'vehicles' => $vehicles
        ]);

    }
}
