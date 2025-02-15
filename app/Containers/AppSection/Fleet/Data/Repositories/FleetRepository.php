<?php

namespace App\Containers\AppSection\Fleet\Data\Repositories;

use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Fleet
 *
 * @extends ParentRepository<TModel>
 */
class FleetRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
