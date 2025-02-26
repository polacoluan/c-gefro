<?php

namespace App\Containers\AppSection\Status\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Status\Actions\ListStatusAction;
use App\Containers\AppSection\Status\UI\API\Requests\ListStatusRequest;
use App\Containers\AppSection\Status\UI\API\Transformers\StatusTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListStatusController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListStatusRequest $request, ListStatusAction $action): array
    {
        $status = $action->run($request);

        return $this->transform($status, StatusTransformer::class);
    }
}
