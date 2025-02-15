<?php

namespace App\Containers\AppSection\Origin\Data\Factories;

use App\Containers\AppSection\Origin\Models\Origin;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Origin
 *
 * @extends ParentFactory<TModel>
 */
class OriginFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Origin::class;

    public function definition(): array
    {
        return [];
    }
}
