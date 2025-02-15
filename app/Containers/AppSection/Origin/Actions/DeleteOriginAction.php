<?php

namespace App\Containers\AppSection\Origin\Actions;

use App\Containers\AppSection\Origin\Tasks\DeleteOriginTask;
use App\Containers\AppSection\Origin\UI\API\Requests\DeleteOriginRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteOriginAction extends ParentAction
{
    public function __construct(
        private readonly DeleteOriginTask $deleteOriginTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteOriginRequest $request): int
    {
        return $this->deleteOriginTask->run($request->id);
    }
}
