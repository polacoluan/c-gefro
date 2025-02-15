<?php

namespace App\Containers\AppSection\Company\Data\Factories;

use App\Containers\AppSection\Company\Models\Company;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Company
 *
 * @extends ParentFactory<TModel>
 */
class CompanyFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Company::class;

    public function definition(): array
    {
        return [];
    }
}
