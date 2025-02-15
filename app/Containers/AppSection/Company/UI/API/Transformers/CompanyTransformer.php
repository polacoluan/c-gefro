<?php

namespace App\Containers\AppSection\Company\UI\API\Transformers;

use App\Containers\AppSection\Company\Models\Company;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class CompanyTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Company $company): array
    {
        return [
            'object' => $company->getResourceKey(),
            'id' => $company->getHashedKey(),
            'created_at' => $company->created_at,
            'updated_at' => $company->updated_at,
            'readable_created_at' => $company->created_at->diffForHumans(),
            'readable_updated_at' => $company->updated_at->diffForHumans(),
        ];
    }
}
