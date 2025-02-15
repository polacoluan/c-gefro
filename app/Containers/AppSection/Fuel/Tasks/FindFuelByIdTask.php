<?php

namespace App\Containers\AppSection\Fuel\Tasks;

use App\Containers\AppSection\Fuel\Data\Repositories\FuelRepository;
use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindFuelByIdTask extends ParentTask
{
    public function __construct(
        private readonly FuelRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Fuel
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
