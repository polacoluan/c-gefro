<?php

namespace App\Containers\AppSection\Maintenance\Actions;

use App\Containers\AppSection\Maintenance\Tasks\DeleteMaintenanceTask;
use App\Containers\AppSection\Maintenance\UI\API\Requests\DeleteMaintenanceRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteMaintenanceAction extends ParentAction
{
    public function __construct(
        private readonly DeleteMaintenanceTask $deleteMaintenanceTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteMaintenanceRequest $request): int
    {
        return $this->deleteMaintenanceTask->run($request->id);
    }
}
