<?php

namespace App\Containers\AppSection\Vehicle\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Vehicle\Actions\ListVehiclesBySubUnityAction;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListVehiclesBySubUnityController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListVehiclesBySubUnityAction $action): array
    {
        return $action->run();
    }
}
