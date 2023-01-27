<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['name', 'email', 'department'];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
