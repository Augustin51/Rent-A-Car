<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment';

    protected $fillable = ['name'];

    public function vehicle()
    {
        return $this->belongsToMany(Vehicle::class, 'vehicle_equipment');
    }
}
