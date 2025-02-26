<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Containers\AppSection\Vehicle\Tasks\UpdateVehicleTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\UpdateVehicleRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateVehicleAction extends ParentAction
{
    public function __construct(
        private readonly UpdateVehicleTask $updateVehicleTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateVehicleRequest $request): Vehicle
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

        return $this->updateVehicleTask->run($data, $request->id);
    }
}
