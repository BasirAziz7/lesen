<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirNavigationServicesPersonnel extends Model
{
    use HasFactory;
   
    public function aircraftmaintenancepersonnel()
    {
        return $this->belongsTo(AircraftMaintenancePersonnel::class);
    }
}
