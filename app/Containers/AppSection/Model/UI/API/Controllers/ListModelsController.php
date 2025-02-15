<?php

namespace App\Containers\AppSection\Model\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Model\Actions\ListModelsAction;
use App\Containers\AppSection\Model\UI\API\Requests\ListModelsRequest;
use App\Containers\AppSection\Model\UI\API\Transformers\ModelTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListModelsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListModelsRequest $request, ListModelsAction $action): array
    {
        $models = $action->run($request);

        return $this->transform($models, ModelTransformer::class);
    }
}
