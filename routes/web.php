<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/', [VehicleController::class, 'index']);
Route::get('/vehicles', [VehicleController::class, 'showAll']);
