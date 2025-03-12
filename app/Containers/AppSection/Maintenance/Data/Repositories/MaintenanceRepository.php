<?php

namespace App\Containers\AppSection\Maintenance\Data\Repositories;

use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Maintenance
 *
 * @extends ParentRepository<TModel>
 */
class MaintenanceRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
