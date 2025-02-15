<?php

namespace App\Containers\AppSection\Color\Data\Factories;

use App\Containers\AppSection\Color\Models\Color;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Color
 *
 * @extends ParentFactory<TModel>
 */
class ColorFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Color::class;

    public function definition(): array
    {
        return [];
    }
}
