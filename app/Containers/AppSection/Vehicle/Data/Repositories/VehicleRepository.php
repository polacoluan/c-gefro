<?php

namespace App\Containers\AppSection\Vehicle\Data\Repositories;

use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Vehicle
 *
 * @extends ParentRepository<TModel>
 */
class VehicleRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
