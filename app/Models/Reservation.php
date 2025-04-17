<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    public $timestamps = false;

    protected $fillable = [
        'email', 'vehicle_id', 'start_date', 'end_date', 'total_price'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
