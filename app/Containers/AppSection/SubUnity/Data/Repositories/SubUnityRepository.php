<?php

namespace App\Containers\AppSection\SubUnity\Data\Repositories;

use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of SubUnity
 *
 * @extends ParentRepository<TModel>
 */
class SubUnityRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
