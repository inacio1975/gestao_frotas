<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $fillable = ['brand', 'model', 'year', 'serial_number', 'acquisition_date'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function maintenance()
    {
        return $this->hasMany(Maintenance::class);
    }
}
