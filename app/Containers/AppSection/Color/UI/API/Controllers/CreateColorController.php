<?php

namespace App\Containers\AppSection\Color\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Color\Actions\CreateColorAction;
use App\Containers\AppSection\Color\UI\API\Requests\CreateColorRequest;
use App\Containers\AppSection\Color\UI\API\Transformers\ColorTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateColorController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateColorRequest $request, CreateColorAction $action): JsonResponse
    {
        $color = $action->run($request);

        return $this->created($this->transform($color, ColorTransformer::class));
    }
}
