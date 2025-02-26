<?php

namespace App\Containers\AppSection\Vehicle\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Vehicle\Actions\FindVehicleByIdAction;
use App\Containers\AppSection\Vehicle\UI\API\Requests\FindVehicleByIdRequest;
use App\Containers\AppSection\Vehicle\UI\API\Transformers\VehicleTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindVehicleByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindVehicleByIdRequest $request, FindVehicleByIdAction $action): array
    {
        $vehicle = $action->run($request);

        return $this->transform($vehicle, VehicleTransformer::class);
    }
}
