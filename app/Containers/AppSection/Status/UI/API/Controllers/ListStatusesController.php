<?php

namespace App\Containers\AppSection\Status\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Status\Actions\ListStatusesAction;
use App\Containers\AppSection\Status\UI\API\Requests\ListStatusesRequest;
use App\Containers\AppSection\Status\UI\API\Transformers\StatusTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListStatusesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListStatusesRequest $request, ListStatusesAction $action): array
    {
        $statuses = $action->run($request);

        return $this->transform($statuses, StatusTransformer::class);
    }
}
