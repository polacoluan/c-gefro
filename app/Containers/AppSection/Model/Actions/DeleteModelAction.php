<?php

namespace App\Containers\AppSection\Model\Actions;

use App\Containers\AppSection\Model\Tasks\DeleteModelTask;
use App\Containers\AppSection\Model\UI\API\Requests\DeleteModelRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteModelAction extends ParentAction
{
    public function __construct(
        private readonly DeleteModelTask $deleteModelTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteModelRequest $request): int
    {
        return $this->deleteModelTask->run($request->id);
    }
}
