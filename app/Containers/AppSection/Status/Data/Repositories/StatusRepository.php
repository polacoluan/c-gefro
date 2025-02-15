<?php

namespace App\Containers\AppSection\Status\Data\Repositories;

use App\Containers\AppSection\Status\Models\Status;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Status
 *
 * @extends ParentRepository<TModel>
 */
class StatusRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
