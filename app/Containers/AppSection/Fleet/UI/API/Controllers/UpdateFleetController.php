<?php

namespace App\Containers\AppSection\Fleet\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Fleet\Actions\UpdateFleetAction;
use App\Containers\AppSection\Fleet\UI\API\Requests\UpdateFleetRequest;
use App\Containers\AppSection\Fleet\UI\API\Transformers\FleetTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateFleetController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateFleetRequest $request, UpdateFleetAction $action): array
    {
        $fleet = $action->run($request);

        return $this->transform($fleet, FleetTransformer::class);
    }
}
