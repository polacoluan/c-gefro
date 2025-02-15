<?php

namespace App\Containers\AppSection\Fuel\Tasks;

use App\Containers\AppSection\Fuel\Data\Repositories\FuelRepository;
use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateFuelTask extends ParentTask
{
    public function __construct(
        private readonly FuelRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Fuel
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
