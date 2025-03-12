<?php

namespace App\Containers\AppSection\Maintenance\Tasks;

use App\Containers\AppSection\Maintenance\Data\Repositories\MaintenanceRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteMaintenanceTask extends ParentTask
{
    public function __construct(
        private readonly MaintenanceRepository $repository,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
