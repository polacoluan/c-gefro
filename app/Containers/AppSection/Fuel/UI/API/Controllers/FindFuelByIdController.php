<?php

namespace App\Containers\AppSection\Fuel\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Fuel\Actions\FindFuelByIdAction;
use App\Containers\AppSection\Fuel\UI\API\Requests\FindFuelByIdRequest;
use App\Containers\AppSection\Fuel\UI\API\Transformers\FuelTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindFuelByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindFuelByIdRequest $request, FindFuelByIdAction $action): array
    {
        $fuel = $action->run($request);

        return $this->transform($fuel, FuelTransformer::class);
    }
}
