<?php

namespace App\Containers\AppSection\Fuel\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Fuel extends ParentModel
{
    protected $fillable = [
        'fuel',
        'description',
    ];
}
