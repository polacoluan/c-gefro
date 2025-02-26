<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Containers\AppSection\Vehicle\Tasks\CreateVehicleTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\CreateVehicleRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateVehicleAction extends ParentAction
{
    public function __construct(
        private readonly CreateVehicleTask $createVehicleTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateVehicleRequest $request): Vehicle
    {
        $data = $request->sanitizeInput([
            'plate',
            'prefix',
            'tracker',
            'chassis',
            'engine_number',
            'renavam',
            'year',
            'color_id',
            'company_id',
            'fleet_id',
            'fuel_id',
            'mark_id',
            'model_id',
            'origin_id',
            'status_id',
            'sub_unity_id',
            'type_id',
        ]);

        return $this->createVehicleTask->run($data);
    }
}
