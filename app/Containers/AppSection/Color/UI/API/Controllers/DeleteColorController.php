<?php

namespace App\Containers\AppSection\Color\UI\API\Controllers;

use App\Containers\AppSection\Color\Actions\DeleteColorAction;
use App\Containers\AppSection\Color\UI\API\Requests\DeleteColorRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteColorController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteColorRequest $request, DeleteColorAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
