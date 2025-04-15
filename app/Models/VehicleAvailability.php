<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleAvailability extends Model
{
    protected $table = 'vehicle_availability';

    protected $fillable = ['vehicle_id', 'date', 'is_available'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
