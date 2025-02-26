<?php

namespace App\Containers\AppSection\Vehicle\Tasks;

use App\Containers\AppSection\Vehicle\Data\Repositories\VehicleRepository;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateVehicleTask extends ParentTask
{
    public function __construct(
        private readonly VehicleRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Vehicle
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
