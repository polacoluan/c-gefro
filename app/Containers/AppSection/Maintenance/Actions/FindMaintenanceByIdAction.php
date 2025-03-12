<?php

namespace App\Containers\AppSection\Maintenance\Actions;

use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Containers\AppSection\Maintenance\Tasks\FindMaintenanceByIdTask;
use App\Containers\AppSection\Maintenance\UI\API\Requests\FindMaintenanceByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindMaintenanceByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindMaintenanceByIdTask $findMaintenanceByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindMaintenanceByIdRequest $request): Maintenance
    {
        return $this->findMaintenanceByIdTask->run($request->id);
    }
}
