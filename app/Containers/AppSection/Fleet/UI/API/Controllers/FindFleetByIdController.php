<?php

namespace App\Containers\AppSection\Fleet\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Fleet\Actions\FindFleetByIdAction;
use App\Containers\AppSection\Fleet\UI\API\Requests\FindFleetByIdRequest;
use App\Containers\AppSection\Fleet\UI\API\Transformers\FleetTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindFleetByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindFleetByIdRequest $request, FindFleetByIdAction $action): array
    {
        $fleet = $action->run($request);

        return $this->transform($fleet, FleetTransformer::class);
    }
}
