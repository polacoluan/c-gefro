<?php

namespace App\Containers\AppSection\Company\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Company\Actions\CreateCompanyAction;
use App\Containers\AppSection\Company\UI\API\Requests\CreateCompanyRequest;
use App\Containers\AppSection\Company\UI\API\Transformers\CompanyTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateCompanyController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateCompanyRequest $request, CreateCompanyAction $action): JsonResponse
    {
        $company = $action->run($request);

        return $this->created($this->transform($company, CompanyTransformer::class));
    }
}
