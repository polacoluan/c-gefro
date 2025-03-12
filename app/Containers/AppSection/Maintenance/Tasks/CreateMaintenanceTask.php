<?php

namespace App\Containers\AppSection\Maintenance\Tasks;

use App\Containers\AppSection\Maintenance\Data\Repositories\MaintenanceRepository;
use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateMaintenanceTask extends ParentTask
{
    public function __construct(
        private readonly MaintenanceRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Maintenance
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
