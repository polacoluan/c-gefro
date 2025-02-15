<?php

namespace App\Containers\AppSection\Origin\Data\Repositories;

use App\Containers\AppSection\Origin\Models\Origin;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Origin
 *
 * @extends ParentRepository<TModel>
 */
class OriginRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
