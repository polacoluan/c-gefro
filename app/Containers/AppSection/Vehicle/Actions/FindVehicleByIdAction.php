<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Containers\AppSection\Vehicle\Tasks\FindVehicleByIdTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\FindVehicleByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindVehicleByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindVehicleByIdTask $findVehicleByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindVehicleByIdRequest $request): Vehicle
    {
        return $this->findVehicleByIdTask->run($request->id);
    }
}
