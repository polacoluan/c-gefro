<?php

namespace App\Containers\AppSection\Fuel\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Fuel\Actions\CreateFuelAction;
use App\Containers\AppSection\Fuel\UI\API\Requests\CreateFuelRequest;
use App\Containers\AppSection\Fuel\UI\API\Transformers\FuelTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateFuelController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateFuelRequest $request, CreateFuelAction $action): JsonResponse
    {
        $fuel = $action->run($request);

        return $this->created($this->transform($fuel, FuelTransformer::class));
    }
}
