<?php

namespace App\Containers\AppSection\Model\Data\Factories;

use App\Containers\AppSection\Model\Models\Model;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Model
 *
 * @extends ParentFactory<TModel>
 */
class ModelFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Model::class;

    public function definition(): array
    {
        return [];
    }
}
