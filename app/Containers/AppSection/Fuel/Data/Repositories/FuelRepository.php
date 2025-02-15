<?php

namespace App\Containers\AppSection\Fuel\Data\Repositories;

use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Fuel
 *
 * @extends ParentRepository<TModel>
 */
class FuelRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
