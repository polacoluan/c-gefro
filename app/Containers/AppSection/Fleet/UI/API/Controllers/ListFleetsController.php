<?php

namespace App\Containers\AppSection\Fleet\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Fleet\Actions\ListFleetsAction;
use App\Containers\AppSection\Fleet\UI\API\Requests\ListFleetsRequest;
use App\Containers\AppSection\Fleet\UI\API\Transformers\FleetTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListFleetsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListFleetsRequest $request, ListFleetsAction $action): array
    {
        $fleets = $action->run($request);

        return $this->transform($fleets, FleetTransformer::class);
    }
}
