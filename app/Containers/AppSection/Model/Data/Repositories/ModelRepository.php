<?php

namespace App\Containers\AppSection\Model\Data\Repositories;

use App\Containers\AppSection\Model\Models\Model;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Model
 *
 * @extends ParentRepository<TModel>
 */
class ModelRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
