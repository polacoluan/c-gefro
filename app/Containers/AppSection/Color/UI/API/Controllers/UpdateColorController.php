<?php

namespace App\Containers\AppSection\Color\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Color\Actions\UpdateColorAction;
use App\Containers\AppSection\Color\UI\API\Requests\UpdateColorRequest;
use App\Containers\AppSection\Color\UI\API\Transformers\ColorTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateColorController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateColorRequest $request, UpdateColorAction $action): array
    {
        $color = $action->run($request);

        return $this->transform($color, ColorTransformer::class);
    }
}
