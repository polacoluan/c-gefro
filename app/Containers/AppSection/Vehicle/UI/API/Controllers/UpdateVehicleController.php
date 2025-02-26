<?php

namespace App\Containers\AppSection\Vehicle\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Vehicle\Actions\UpdateVehicleAction;
use App\Containers\AppSection\Vehicle\UI\API\Requests\UpdateVehicleRequest;
use App\Containers\AppSection\Vehicle\UI\API\Transformers\VehicleTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateVehicleController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateVehicleRequest $request, UpdateVehicleAction $action): array
    {
        $vehicle = $action->run($request);

        return $this->transform($vehicle, VehicleTransformer::class);
    }
}
