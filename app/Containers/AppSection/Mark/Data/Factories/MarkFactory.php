<?php

namespace App\Containers\AppSection\Mark\Data\Factories;

use App\Containers\AppSection\Mark\Models\Mark;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Mark
 *
 * @extends ParentFactory<TModel>
 */
class MarkFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Mark::class;

    public function definition(): array
    {
        return [];
    }
}
