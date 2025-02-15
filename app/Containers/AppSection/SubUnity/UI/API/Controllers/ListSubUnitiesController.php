<?php

namespace App\Containers\AppSection\SubUnity\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\SubUnity\Actions\ListSubUnitiesAction;
use App\Containers\AppSection\SubUnity\UI\API\Requests\ListSubUnitiesRequest;
use App\Containers\AppSection\SubUnity\UI\API\Transformers\SubUnityTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListSubUnitiesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListSubUnitiesRequest $request, ListSubUnitiesAction $action): array
    {
        $subUnities = $action->run($request);

        return $this->transform($subUnities, SubUnityTransformer::class);
    }
}
