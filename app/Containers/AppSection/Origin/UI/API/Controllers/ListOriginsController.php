<?php

namespace App\Containers\AppSection\Origin\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Origin\Actions\ListOriginsAction;
use App\Containers\AppSection\Origin\UI\API\Requests\ListOriginsRequest;
use App\Containers\AppSection\Origin\UI\API\Transformers\OriginTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListOriginsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListOriginsRequest $request, ListOriginsAction $action): array
    {
        $origins = $action->run($request);

        return $this->transform($origins, OriginTransformer::class);
    }
}
