<?php

namespace App\Containers\AppSection\Status\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Status\Actions\CreateStatusAction;
use App\Containers\AppSection\Status\UI\API\Requests\CreateStatusRequest;
use App\Containers\AppSection\Status\UI\API\Transformers\StatusTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateStatusController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateStatusRequest $request, CreateStatusAction $action): JsonResponse
    {
        $status = $action->run($request);

        return $this->created($this->transform($status, StatusTransformer::class));
    }
}
