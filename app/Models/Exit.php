<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exitt extends Model
{
    protected $table = 'exitts';
    protected $fillable = ['vehicle_id', 'reason', 'date'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
