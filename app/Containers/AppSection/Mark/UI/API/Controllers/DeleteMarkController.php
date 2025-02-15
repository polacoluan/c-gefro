<?php

namespace App\Containers\AppSection\Mark\UI\API\Controllers;

use App\Containers\AppSection\Mark\Actions\DeleteMarkAction;
use App\Containers\AppSection\Mark\UI\API\Requests\DeleteMarkRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteMarkController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteMarkRequest $request, DeleteMarkAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
