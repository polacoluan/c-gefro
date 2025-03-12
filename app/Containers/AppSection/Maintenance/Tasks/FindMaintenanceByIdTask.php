<?php

namespace App\Containers\AppSection\Maintenance\Tasks;

use App\Containers\AppSection\Maintenance\Data\Repositories\MaintenanceRepository;
use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindMaintenanceByIdTask extends ParentTask
{
    public function __construct(
        private readonly MaintenanceRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Maintenance
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
