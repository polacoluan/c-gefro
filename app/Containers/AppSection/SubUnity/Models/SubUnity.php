<?php

namespace App\Containers\AppSection\SubUnity\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class SubUnity extends ParentModel
{
    protected $fillable = [
        'sub_unity',
        'description',
    ];
}
