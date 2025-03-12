<?php

namespace App\Containers\AppSection\Maintenance\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Maintenance\Actions\CreateMaintenanceAction;
use App\Containers\AppSection\Maintenance\UI\API\Requests\CreateMaintenanceRequest;
use App\Containers\AppSection\Maintenance\UI\API\Transformers\MaintenanceTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateMaintenanceController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateMaintenanceRequest $request, CreateMaintenanceAction $action): JsonResponse
    {
        $maintenance = $action->run($request);

        return $this->created($this->transform($maintenance, MaintenanceTransformer::class));
    }
}
