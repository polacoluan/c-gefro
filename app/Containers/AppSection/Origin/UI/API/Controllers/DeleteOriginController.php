<?php

namespace App\Containers\AppSection\Origin\UI\API\Controllers;

use App\Containers\AppSection\Origin\Actions\DeleteOriginAction;
use App\Containers\AppSection\Origin\UI\API\Requests\DeleteOriginRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteOriginController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteOriginRequest $request, DeleteOriginAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
