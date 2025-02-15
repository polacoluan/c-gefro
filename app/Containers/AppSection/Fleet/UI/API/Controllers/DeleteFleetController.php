<?php

namespace App\Containers\AppSection\Fleet\UI\API\Controllers;

use App\Containers\AppSection\Fleet\Actions\DeleteFleetAction;
use App\Containers\AppSection\Fleet\UI\API\Requests\DeleteFleetRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteFleetController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteFleetRequest $request, DeleteFleetAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
