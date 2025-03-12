<?php

namespace App\Containers\AppSection\Maintenance\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Maintenance\Actions\FindMaintenanceByIdAction;
use App\Containers\AppSection\Maintenance\UI\API\Requests\FindMaintenanceByIdRequest;
use App\Containers\AppSection\Maintenance\UI\API\Transformers\MaintenanceTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindMaintenanceByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindMaintenanceByIdRequest $request, FindMaintenanceByIdAction $action): array
    {
        $maintenance = $action->run($request);

        return $this->transform($maintenance, MaintenanceTransformer::class);
    }
}
