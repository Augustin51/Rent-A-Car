<?php

namespace App\Http\Controllers\Api;

use App\Models\Reservation;
use App\Models\Vehicle;
use App\Models\VehicleType;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VehicleController
{
    public function index() {
        $data = json_decode(file_get_contents('php://input'));

        $type = $data->type;
        $fuelType = $data->fuelType;
        $transmission = $data->transmission;

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
    public function getDateReservation()
    {
        $data = json_decode(file_get_contents('php://input'));
        $idVehicle = $data->idVehicle;

        $reservations = Reservation::where('vehicle_id', $idVehicle)
            ->whereDate('start_date', '>=', Carbon::today())
            ->select('start_date', 'end_date')
            ->get();

        return response()->json(['reservations' => $reservations]);
    }

    public function postDateReservation()
    {
        $data = json_decode(file_get_contents('php://input'));

        if (empty($data->start_date) || empty($data->end_date) || empty($data->email)) {
            return response()->json([
                'success' => false,
                'messageUser' => 'All fields are required.'
            ], 400);
        }

        $start_date = new \DateTime($data->start_date);
        $end_date = new \DateTime($data->end_date);
        $email = $data->email;
        $pricePerDay = (float) $data->pricePerDay;
        $idVehicle = (int) $data->idVehicle;

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'success' => false,
                'messageUser' => 'Please enter a valid email address.'
            ], 400);
        }

        if ($end_date <= $start_date) {
            return response()->json([
                'success' => false,
                'messageUser' => 'The end date must be later than the start date.'
            ], 400);
        }

        $overlapping = Reservation::where('vehicle_id', $idVehicle)
            ->where(function ($query) use ($start_date, $end_date) {
                $query->where('start_date', '<=', $end_date->format('Y-m-d'))
                    ->where('end_date', '>=', $start_date->format('Y-m-d'));
            })
            ->exists();

        if ($overlapping) {
            return response()->json([
                'success' => false,
                'messageUser' => 'This date range overlaps with an existing reservation.'
            ], 400);
        }

        $dateDiff = $start_date->diff($end_date)->days;
        $totalPrice = $pricePerDay * $dateDiff;

        try {
            DB::statement('SET foreign_key_checks = 0;');

            Reservation::create([
                'email' => $email,
                'vehicle_id' => $idVehicle,
                'start_date' => $start_date->format('Y-m-d'),
                'end_date' => $end_date->format('Y-m-d'),
                'created_at' => now(),
                'total_price' => $totalPrice
            ]);

            DB::statement('SET foreign_key_checks = 1;');


            return response()->json([
                'success' => true,
                'messageUser' => 'You reservation is confirmed'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'messageUser' => 'An error occurred while saving. Please try again later.',
                'messageDev' => $e->getMessage()
            ], 500);
        }
    }
}
