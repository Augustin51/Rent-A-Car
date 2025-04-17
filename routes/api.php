<?php

use App\Http\Controllers\Api\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/vehicles/filter', [VehicleController::class, 'index']);
Route::post('/reservation/get', [VehicleController::class, 'getDateReservation']);
Route::post('/reservation/post', [VehicleController::class, 'postDateReservation']);
