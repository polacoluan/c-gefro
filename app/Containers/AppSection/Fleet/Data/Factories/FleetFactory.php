<?php

namespace App\Containers\AppSection\Fleet\Data\Factories;

use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Fleet
 *
 * @extends ParentFactory<TModel>
 */
class FleetFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Fleet::class;

    public function definition(): array
    {
        return [];
    }
}
