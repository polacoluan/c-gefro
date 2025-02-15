<?php

namespace App\Containers\AppSection\Fuel\UI\API\Controllers;

use App\Containers\AppSection\Fuel\Actions\DeleteFuelAction;
use App\Containers\AppSection\Fuel\UI\API\Requests\DeleteFuelRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteFuelController extends ApiController
{
    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteFuelRequest $request, DeleteFuelAction $action): JsonResponse
    {
        $action->run($request);

        return $this->noContent();
    }
}
