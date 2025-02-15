<?php

namespace App\Containers\AppSection\Status\Data\Factories;

use App\Containers\AppSection\Status\Models\Status;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Status
 *
 * @extends ParentFactory<TModel>
 */
class StatusFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Status::class;

    public function definition(): array
    {
        return [];
    }
}
