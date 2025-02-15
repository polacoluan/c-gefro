<?php

namespace App\Containers\AppSection\Fuel\Tasks;

use App\Containers\AppSection\Fuel\Data\Repositories\FuelRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteFuelTask extends ParentTask
{
    public function __construct(
        private readonly FuelRepository $repository,
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
