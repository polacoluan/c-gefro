<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use App\Containers\AppSection\Vehicle\Tasks\DeleteVehicleTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\DeleteVehicleRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteVehicleAction extends ParentAction
{
    public function __construct(
        private readonly DeleteVehicleTask $deleteVehicleTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteVehicleRequest $request): int
    {
        return $this->deleteVehicleTask->run($request->id);
    }
}
