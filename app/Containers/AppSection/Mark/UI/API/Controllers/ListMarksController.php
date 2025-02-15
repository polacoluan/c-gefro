<?php

namespace App\Containers\AppSection\Mark\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Mark\Actions\ListMarksAction;
use App\Containers\AppSection\Mark\UI\API\Requests\ListMarksRequest;
use App\Containers\AppSection\Mark\UI\API\Transformers\MarkTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListMarksController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListMarksRequest $request, ListMarksAction $action): array
    {
        $marks = $action->run($request);

        return $this->transform($marks, MarkTransformer::class);
    }
}
