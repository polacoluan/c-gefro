<?php

namespace App\Containers\AppSection\Status\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Status\Actions\UpdateStatusAction;
use App\Containers\AppSection\Status\UI\API\Requests\UpdateStatusRequest;
use App\Containers\AppSection\Status\UI\API\Transformers\StatusTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateStatusController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateStatusRequest $request, UpdateStatusAction $action): array
    {
        $status = $action->run($request);

        return $this->transform($status, StatusTransformer::class);
    }
}
