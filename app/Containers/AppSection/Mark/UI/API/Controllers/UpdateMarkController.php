<?php

namespace App\Containers\AppSection\Mark\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Mark\Actions\UpdateMarkAction;
use App\Containers\AppSection\Mark\UI\API\Requests\UpdateMarkRequest;
use App\Containers\AppSection\Mark\UI\API\Transformers\MarkTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateMarkController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateMarkRequest $request, UpdateMarkAction $action): array
    {
        $mark = $action->run($request);

        return $this->transform($mark, MarkTransformer::class);
    }
}
