<?php

namespace App\Containers\AppSection\Origin\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Origin\Actions\CreateOriginAction;
use App\Containers\AppSection\Origin\UI\API\Requests\CreateOriginRequest;
use App\Containers\AppSection\Origin\UI\API\Transformers\OriginTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateOriginController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateOriginRequest $request, CreateOriginAction $action): JsonResponse
    {
        $origin = $action->run($request);

        return $this->created($this->transform($origin, OriginTransformer::class));
    }
}
