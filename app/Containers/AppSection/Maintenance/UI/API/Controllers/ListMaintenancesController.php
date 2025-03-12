<?php

namespace App\Containers\AppSection\Maintenance\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Maintenance\Actions\ListMaintenancesAction;
use App\Containers\AppSection\Maintenance\UI\API\Requests\ListMaintenancesRequest;
use App\Containers\AppSection\Maintenance\UI\API\Transformers\MaintenanceTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListMaintenancesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListMaintenancesRequest $request, ListMaintenancesAction $action): array
    {
        $maintenances = $action->run($request);

        return $this->transform($maintenances, MaintenanceTransformer::class);
    }
}
