<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exit_ extends Model
{
    protected $table = 'exits';
    protected $fillable = ['vehicle_id', 'reason', 'date'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
