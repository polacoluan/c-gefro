<?php

namespace App\Containers\AppSection\Fuel\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Fuel\Actions\UpdateFuelAction;
use App\Containers\AppSection\Fuel\UI\API\Requests\UpdateFuelRequest;
use App\Containers\AppSection\Fuel\UI\API\Transformers\FuelTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateFuelController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateFuelRequest $request, UpdateFuelAction $action): array
    {
        $fuel = $action->run($request);

        return $this->transform($fuel, FuelTransformer::class);
    }
}
