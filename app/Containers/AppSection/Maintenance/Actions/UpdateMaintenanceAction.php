<?php

namespace App\Containers\AppSection\Maintenance\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Containers\AppSection\Maintenance\Tasks\UpdateMaintenanceTask;
use App\Containers\AppSection\Maintenance\UI\API\Requests\UpdateMaintenanceRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateMaintenanceAction extends ParentAction
{
    public function __construct(
        private readonly UpdateMaintenanceTask $updateMaintenanceTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateMaintenanceRequest $request): Maintenance
    {
        $data = $request->sanitizeInput([
            'vehicle_id',
            'maintenance',
            'description',
            'cost',
            'kilometers',
            'date',
            'next_maintenance',
        ]);

        return $this->updateMaintenanceTask->run($data, $request->id);
    }
}
