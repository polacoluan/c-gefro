<?php

namespace App\Containers\AppSection\Model\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Model\Actions\CreateModelAction;
use App\Containers\AppSection\Model\UI\API\Requests\CreateModelRequest;
use App\Containers\AppSection\Model\UI\API\Transformers\ModelTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateModelController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateModelRequest $request, CreateModelAction $action): JsonResponse
    {
        $model = $action->run($request);

        return $this->created($this->transform($model, ModelTransformer::class));
    }
}
