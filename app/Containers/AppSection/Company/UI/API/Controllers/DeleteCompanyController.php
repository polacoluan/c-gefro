<?php

namespace App\Containers\AppSection\Company\UI\API\Controllers;

use App\Containers\AppSection\Company\Actions\DeleteCompanyAction;
use App\Containers\AppSection\Company\UI\API\Requests\DeleteCompanyRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteCompanyController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteCompanyRequest $request, DeleteCompanyAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
