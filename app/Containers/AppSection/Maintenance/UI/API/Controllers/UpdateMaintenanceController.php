<?php

namespace App\Containers\AppSection\Maintenance\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Maintenance\Actions\UpdateMaintenanceAction;
use App\Containers\AppSection\Maintenance\UI\API\Requests\UpdateMaintenanceRequest;
use App\Containers\AppSection\Maintenance\UI\API\Transformers\MaintenanceTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateMaintenanceController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateMaintenanceRequest $request, UpdateMaintenanceAction $action): array
    {
        $maintenance = $action->run($request);

        return $this->transform($maintenance, MaintenanceTransformer::class);
    }
}
