<?php

namespace App\Containers\AppSection\Fleet\Tasks;

use App\Containers\AppSection\Fleet\Data\Repositories\FleetRepository;
use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindFleetByIdTask extends ParentTask
{
    public function __construct(
        private readonly FleetRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Fleet
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
