<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::post('/vehicles/type', [VehicleController::class, 'getType']);
