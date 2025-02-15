<?php

namespace App\Containers\AppSection\Color\Data\Repositories;

use App\Containers\AppSection\Color\Models\Color;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Color
 *
 * @extends ParentRepository<TModel>
 */
class ColorRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
