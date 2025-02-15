<?php

namespace App\Containers\AppSection\Fleet\Actions;

use App\Containers\AppSection\Fleet\Tasks\DeleteFleetTask;
use App\Containers\AppSection\Fleet\UI\API\Requests\DeleteFleetRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteFleetAction extends ParentAction
{
    public function __construct(
        private readonly DeleteFleetTask $deleteFleetTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteFleetRequest $request): int
    {
        return $this->deleteFleetTask->run($request->id);
    }
}
