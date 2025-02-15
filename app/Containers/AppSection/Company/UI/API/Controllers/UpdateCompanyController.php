<?php

namespace App\Containers\AppSection\Company\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Company\Actions\UpdateCompanyAction;
use App\Containers\AppSection\Company\UI\API\Requests\UpdateCompanyRequest;
use App\Containers\AppSection\Company\UI\API\Transformers\CompanyTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateCompanyController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateCompanyRequest $request, UpdateCompanyAction $action): array
    {
        $company = $action->run($request);

        return $this->transform($company, CompanyTransformer::class);
    }
}
