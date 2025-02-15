<?php

namespace App\Containers\AppSection\SubUnity\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\SubUnity\Actions\CreateSubUnityAction;
use App\Containers\AppSection\SubUnity\UI\API\Requests\CreateSubUnityRequest;
use App\Containers\AppSection\SubUnity\UI\API\Transformers\SubUnityTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateSubUnityController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateSubUnityRequest $request, CreateSubUnityAction $action): JsonResponse
    {
        $subUnity = $action->run($request);

        return $this->created($this->transform($subUnity, SubUnityTransformer::class));
    }
}
