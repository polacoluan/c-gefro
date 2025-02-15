<?php

namespace App\Containers\AppSection\Model\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Model\Actions\FindModelByIdAction;
use App\Containers\AppSection\Model\UI\API\Requests\FindModelByIdRequest;
use App\Containers\AppSection\Model\UI\API\Transformers\ModelTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindModelByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindModelByIdRequest $request, FindModelByIdAction $action): array
    {
        $model = $action->run($request);

        return $this->transform($model, ModelTransformer::class);
    }
}
