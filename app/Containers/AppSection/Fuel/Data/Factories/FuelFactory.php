<?php

namespace App\Containers\AppSection\Fuel\Data\Factories;

use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Fuel
 *
 * @extends ParentFactory<TModel>
 */
class FuelFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Fuel::class;

    public function definition(): array
    {
        return [];
    }
}
