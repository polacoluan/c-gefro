<?php

namespace App\Containers\AppSection\Maintenance\Data\Factories;

use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Maintenance
 *
 * @extends ParentFactory<TModel>
 */
class MaintenanceFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Maintenance::class;

    public function definition(): array
    {
        return [];
    }
}
