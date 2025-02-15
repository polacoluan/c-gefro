<?php

namespace App\Containers\AppSection\Mark\Data\Repositories;

use App\Containers\AppSection\Mark\Models\Mark;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Mark
 *
 * @extends ParentRepository<TModel>
 */
class MarkRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
