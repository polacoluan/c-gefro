<?php

namespace App\Containers\AppSection\Fuel\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Fuel\Actions\ListFuelsAction;
use App\Containers\AppSection\Fuel\UI\API\Requests\ListFuelsRequest;
use App\Containers\AppSection\Fuel\UI\API\Transformers\FuelTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListFuelsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListFuelsRequest $request, ListFuelsAction $action): array
    {
        $fuels = $action->run($request);

        return $this->transform($fuels, FuelTransformer::class);
    }
}
