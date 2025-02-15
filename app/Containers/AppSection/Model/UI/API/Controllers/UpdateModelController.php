<?php

namespace App\Containers\AppSection\Model\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Model\Actions\UpdateModelAction;
use App\Containers\AppSection\Model\UI\API\Requests\UpdateModelRequest;
use App\Containers\AppSection\Model\UI\API\Transformers\ModelTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateModelController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateModelRequest $request, UpdateModelAction $action): array
    {
        $model = $action->run($request);

        return $this->transform($model, ModelTransformer::class);
    }
}
