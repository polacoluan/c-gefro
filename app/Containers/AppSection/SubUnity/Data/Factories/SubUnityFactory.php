<?php

namespace App\Containers\AppSection\SubUnity\Data\Factories;

use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of SubUnity
 *
 * @extends ParentFactory<TModel>
 */
class SubUnityFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = SubUnity::class;

    public function definition(): array
    {
        return [];
    }
}
