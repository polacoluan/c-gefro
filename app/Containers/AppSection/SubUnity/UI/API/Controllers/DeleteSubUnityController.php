<?php

namespace App\Containers\AppSection\SubUnity\UI\API\Controllers;

use App\Containers\AppSection\SubUnity\Actions\DeleteSubUnityAction;
use App\Containers\AppSection\SubUnity\UI\API\Requests\DeleteSubUnityRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteSubUnityController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteSubUnityRequest $request, DeleteSubUnityAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
