<?php

namespace App\Containers\AppSection\Origin\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Origin\Actions\FindOriginByIdAction;
use App\Containers\AppSection\Origin\UI\API\Requests\FindOriginByIdRequest;
use App\Containers\AppSection\Origin\UI\API\Transformers\OriginTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindOriginByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindOriginByIdRequest $request, FindOriginByIdAction $action): array
    {
        $origin = $action->run($request);

        return $this->transform($origin, OriginTransformer::class);
    }
}
