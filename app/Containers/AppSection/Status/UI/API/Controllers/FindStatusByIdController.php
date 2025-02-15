<?php

namespace App\Containers\AppSection\Status\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Status\Actions\FindStatusByIdAction;
use App\Containers\AppSection\Status\UI\API\Requests\FindStatusByIdRequest;
use App\Containers\AppSection\Status\UI\API\Transformers\StatusTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindStatusByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindStatusByIdRequest $request, FindStatusByIdAction $action): array
    {
        $status = $action->run($request);

        return $this->transform($status, StatusTransformer::class);
    }
}
