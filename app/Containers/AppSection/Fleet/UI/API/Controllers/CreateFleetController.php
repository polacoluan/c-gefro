<?php

namespace App\Containers\AppSection\Fleet\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Fleet\Actions\CreateFleetAction;
use App\Containers\AppSection\Fleet\UI\API\Requests\CreateFleetRequest;
use App\Containers\AppSection\Fleet\UI\API\Transformers\FleetTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateFleetController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateFleetRequest $request, CreateFleetAction $action): JsonResponse
    {
        $fleet = $action->run($request);

        return $this->created($this->transform($fleet, FleetTransformer::class));
    }
}
