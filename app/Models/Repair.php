<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $table = 'repairs';
    protected $fillable = ['vehicle_id', 'description', 'date', 'cost'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
