<?php

namespace App\Containers\AppSection\Mark\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Mark\Actions\FindMarkByIdAction;
use App\Containers\AppSection\Mark\UI\API\Requests\FindMarkByIdRequest;
use App\Containers\AppSection\Mark\UI\API\Transformers\MarkTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindMarkByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindMarkByIdRequest $request, FindMarkByIdAction $action): array
    {
        $mark = $action->run($request);

        return $this->transform($mark, MarkTransformer::class);
    }
}
