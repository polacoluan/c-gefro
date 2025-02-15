<?php

namespace App\Containers\AppSection\SubUnity\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\SubUnity\Actions\UpdateSubUnityAction;
use App\Containers\AppSection\SubUnity\UI\API\Requests\UpdateSubUnityRequest;
use App\Containers\AppSection\SubUnity\UI\API\Transformers\SubUnityTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateSubUnityController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateSubUnityRequest $request, UpdateSubUnityAction $action): array
    {
        $subUnity = $action->run($request);

        return $this->transform($subUnity, SubUnityTransformer::class);
    }
}
