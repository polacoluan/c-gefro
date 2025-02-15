<?php

namespace App\Containers\AppSection\SubUnity\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\SubUnity\Actions\FindSubUnityByIdAction;
use App\Containers\AppSection\SubUnity\UI\API\Requests\FindSubUnityByIdRequest;
use App\Containers\AppSection\SubUnity\UI\API\Transformers\SubUnityTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindSubUnityByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindSubUnityByIdRequest $request, FindSubUnityByIdAction $action): array
    {
        $subUnity = $action->run($request);

        return $this->transform($subUnity, SubUnityTransformer::class);
    }
}
