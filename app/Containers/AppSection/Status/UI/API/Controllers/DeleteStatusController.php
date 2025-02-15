<?php

namespace App\Containers\AppSection\Status\UI\API\Controllers;

use App\Containers\AppSection\Status\Actions\DeleteStatusAction;
use App\Containers\AppSection\Status\UI\API\Requests\DeleteStatusRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteStatusController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteStatusRequest $request, DeleteStatusAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
