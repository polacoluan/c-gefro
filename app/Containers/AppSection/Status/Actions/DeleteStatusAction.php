<?php

namespace App\Containers\AppSection\Status\Actions;

use App\Containers\AppSection\Status\Tasks\DeleteStatusTask;
use App\Containers\AppSection\Status\UI\API\Requests\DeleteStatusRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteStatusAction extends ParentAction
{
    public function __construct(
        private readonly DeleteStatusTask $deleteStatusTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteStatusRequest $request): int
    {
        return $this->deleteStatusTask->run($request->id);
    }
}
