<?php

namespace App\Containers\AppSection\Maintenance\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Containers\AppSection\Maintenance\Tasks\CreateMaintenanceTask;
use App\Containers\AppSection\Maintenance\UI\API\Requests\CreateMaintenanceRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateMaintenanceAction extends ParentAction
{
    public function __construct(
        private readonly CreateMaintenanceTask $createMaintenanceTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateMaintenanceRequest $request): Maintenance
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

        return $this->createMaintenanceTask->run($data);
    }
}
