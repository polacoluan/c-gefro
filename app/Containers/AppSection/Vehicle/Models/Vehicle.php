<?php

namespace App\Containers\AppSection\Vehicle\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Vehicle extends ParentModel
{
    protected $fillable = [
        'plate',
        'prefix',
        'tracker',
        'chassis',
        'engine_number',
        'renavam',
        'year',
        'color_id',
        'company_id',
        'capacity',
        'fleet_id',
        'fuel_id',
        'mark_id',
        'model_id',
        'origin_id',
        'status_id',
        'sub_unity_id',
        'type_id',
    ];
}
