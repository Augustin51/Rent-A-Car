<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/', [VehicleController::class, 'index']);
Route::match(['get', 'post'], '/vehicles', [VehicleController::class, 'showAll']);
Route::get('/vehicle/{id}', [VehicleController::class, 'showOne']);
Route::get('/rent/{id}', [VehicleController::class, 'rent']);

