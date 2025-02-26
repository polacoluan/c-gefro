<?php

namespace App\Containers\AppSection\Vehicle\Tasks;

use App\Containers\AppSection\Vehicle\Data\Repositories\VehicleRepository;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindVehicleByIdTask extends ParentTask
{
    public function __construct(
        private readonly VehicleRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Vehicle
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
