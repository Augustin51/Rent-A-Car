<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicule';

    protected $fillable = [
        'brand', 'model', 'year', 'price_per_day', 'doors',
        'fuel_type', 'air_conditioning', 'seats',
        'transmission', 'vehicle_type_id'
    ];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function photo()
    {
        return $this->hasMany(VehiclePhoto::class);
    }

    public function equipment()
    {
        return $this->belongsToMany(Equipment::class, 'vehicle_equipment');
    }

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function availability()
    {
        return $this->hasMany(VehicleAvailability::class);
    }
}
