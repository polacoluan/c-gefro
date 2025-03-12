<?php

namespace App\Containers\AppSection\Vehicle\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Vehicle\Actions\ListVehiclesByOriginAction;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListVehiclesByOriginController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListVehiclesByOriginAction $action): array
    {
        return $action->run();
    }
}
