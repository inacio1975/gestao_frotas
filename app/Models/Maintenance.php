<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';
    protected $fillable = ['vehicle_id', 'description', 'date', 'cost'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
