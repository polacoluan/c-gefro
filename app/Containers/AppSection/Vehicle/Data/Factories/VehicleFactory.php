<?php

namespace App\Containers\AppSection\Vehicle\Data\Factories;

use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Vehicle
 *
 * @extends ParentFactory<TModel>
 */
class VehicleFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Vehicle::class;

    public function definition(): array
    {
        return [];
    }
}
