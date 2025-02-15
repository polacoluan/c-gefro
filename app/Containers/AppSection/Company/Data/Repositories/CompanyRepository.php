<?php

namespace App\Containers\AppSection\Company\Data\Repositories;

use App\Containers\AppSection\Company\Models\Company;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Company
 *
 * @extends ParentRepository<TModel>
 */
class CompanyRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
