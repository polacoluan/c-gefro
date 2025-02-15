<?php

namespace App\Containers\AppSection\Company\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Company\Actions\FindCompanyByIdAction;
use App\Containers\AppSection\Company\UI\API\Requests\FindCompanyByIdRequest;
use App\Containers\AppSection\Company\UI\API\Transformers\CompanyTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindCompanyByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindCompanyByIdRequest $request, FindCompanyByIdAction $action): array
    {
        $company = $action->run($request);

        return $this->transform($company, CompanyTransformer::class);
    }
}
