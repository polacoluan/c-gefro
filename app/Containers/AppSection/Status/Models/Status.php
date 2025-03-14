<?php

namespace App\Containers\AppSection\Status\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Status extends ParentModel
{
    protected $table = "status";
    protected $fillable = [
        'status',
        'description',
    ];
}
