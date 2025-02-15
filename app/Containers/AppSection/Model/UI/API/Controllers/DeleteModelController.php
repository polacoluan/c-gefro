<?php

namespace App\Containers\AppSection\Model\UI\API\Controllers;

use App\Containers\AppSection\Model\Actions\DeleteModelAction;
use App\Containers\AppSection\Model\UI\API\Requests\DeleteModelRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteModelController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteModelRequest $request, DeleteModelAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
