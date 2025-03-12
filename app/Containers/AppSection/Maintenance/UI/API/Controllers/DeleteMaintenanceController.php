<?php

namespace App\Containers\AppSection\Maintenance\UI\API\Controllers;

use App\Containers\AppSection\Maintenance\Actions\DeleteMaintenanceAction;
use App\Containers\AppSection\Maintenance\UI\API\Requests\DeleteMaintenanceRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteMaintenanceController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteMaintenanceRequest $request, DeleteMaintenanceAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
