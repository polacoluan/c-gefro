<?php

namespace App\Containers\AppSection\Maintenance\Models;

use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Ship\Parents\Models\Model as ParentModel;

class Maintenance extends ParentModel
{
    protected $fillable = [
        'vehicle_id',
        'maintenance',
        'description',
        'cost',
        'kilometers',
        'date',
        'next_maintenance',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
