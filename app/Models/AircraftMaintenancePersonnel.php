<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AircraftMaintenancePersonnel extends Model
{
    use HasFactory;

    public function airnavigationservices() 
    {
        return $this->hasMany(AirNavigationServices::class);
    }
}
