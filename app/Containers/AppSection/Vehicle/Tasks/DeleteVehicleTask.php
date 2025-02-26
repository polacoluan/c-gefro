<?php

namespace App\Containers\AppSection\Vehicle\Tasks;

use App\Containers\AppSection\Vehicle\Data\Repositories\VehicleRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteVehicleTask extends ParentTask
{
    public function __construct(
        private readonly VehicleRepository $repository,
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
