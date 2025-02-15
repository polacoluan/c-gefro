<?php

namespace App\Containers\AppSection\SubUnity\Actions;

use App\Containers\AppSection\SubUnity\Tasks\DeleteSubUnityTask;
use App\Containers\AppSection\SubUnity\UI\API\Requests\DeleteSubUnityRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteSubUnityAction extends ParentAction
{
    public function __construct(
        private readonly DeleteSubUnityTask $deleteSubUnityTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteSubUnityRequest $request): int
    {
        return $this->deleteSubUnityTask->run($request->id);
    }
}
