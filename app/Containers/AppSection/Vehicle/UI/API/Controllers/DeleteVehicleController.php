<?php

namespace App\Containers\AppSection\Vehicle\UI\API\Controllers;

use App\Containers\AppSection\Vehicle\Actions\DeleteVehicleAction;
use App\Containers\AppSection\Vehicle\UI\API\Requests\DeleteVehicleRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteVehicleController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteVehicleRequest $request, DeleteVehicleAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
