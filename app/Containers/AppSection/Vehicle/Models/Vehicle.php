<?php

namespace App\Containers\AppSection\Vehicle\Models;

use App\Containers\AppSection\Color\Models\Color;
use App\Containers\AppSection\Company\Models\Company;
use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Containers\AppSection\Mark\Models\Mark;
use App\Containers\AppSection\Model\Models\Model;
use App\Containers\AppSection\Origin\Models\Origin;
use App\Containers\AppSection\Status\Models\Status;
use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Containers\AppSection\Type\Models\Type;
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
        'capacity',
        'color_id',
        'company_id',
        'fleet_id',
        'fuel_id',
        'mark_id',
        'model_id',
        'origin_id',
        'status_id',
        'sub_unity_id',
        'type_id',
    ];

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function fleet()
    {
        return $this->belongsTo(Fleet::class);
    }

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function mark()
    {
        return $this->belongsTo(Mark::class);
    }

    public function model()
    {
        return $this->belongsTo(Model::class);
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function subUnity()
    {
        return $this->belongsTo(SubUnity::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
