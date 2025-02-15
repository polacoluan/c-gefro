<?php

namespace App\Containers\AppSection\Company\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Company\Actions\ListCompaniesAction;
use App\Containers\AppSection\Company\UI\API\Requests\ListCompaniesRequest;
use App\Containers\AppSection\Company\UI\API\Transformers\CompanyTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListCompaniesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListCompaniesRequest $request, ListCompaniesAction $action): array
    {
        $companies = $action->run($request);

        return $this->transform($companies, CompanyTransformer::class);
    }
}
