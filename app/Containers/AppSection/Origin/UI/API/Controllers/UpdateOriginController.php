<?php

namespace App\Containers\AppSection\Origin\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Origin\Actions\UpdateOriginAction;
use App\Containers\AppSection\Origin\UI\API\Requests\UpdateOriginRequest;
use App\Containers\AppSection\Origin\UI\API\Transformers\OriginTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateOriginController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateOriginRequest $request, UpdateOriginAction $action): array
    {
        $origin = $action->run($request);

        return $this->transform($origin, OriginTransformer::class);
    }
}
