<?php

namespace App\Containers\AppSection\Color\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Color\Actions\ListColorsAction;
use App\Containers\AppSection\Color\UI\API\Requests\ListColorsRequest;
use App\Containers\AppSection\Color\UI\API\Transformers\ColorTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListColorsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListColorsRequest $request, ListColorsAction $action): array
    {
        $colors = $action->run($request);

        return $this->transform($colors, ColorTransformer::class);
    }
}
