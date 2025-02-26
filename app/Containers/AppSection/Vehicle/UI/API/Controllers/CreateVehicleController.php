<?php

namespace App\Containers\AppSection\Vehicle\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Vehicle\Actions\CreateVehicleAction;
use App\Containers\AppSection\Vehicle\UI\API\Requests\CreateVehicleRequest;
use App\Containers\AppSection\Vehicle\UI\API\Transformers\VehicleTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateVehicleController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateVehicleRequest $request, CreateVehicleAction $action): JsonResponse
    {
        $vehicle = $action->run($request);

        return $this->created($this->transform($vehicle, VehicleTransformer::class));
    }
}
