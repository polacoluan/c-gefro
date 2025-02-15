<?php

namespace App\Containers\AppSection\Origin\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Origin extends ParentModel
{
    protected $fillable = [
        'origin',
        'description',
    ];
}
