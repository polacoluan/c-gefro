<?php

namespace App\Containers\AppSection\Fleet\Tasks;

use App\Containers\AppSection\Fleet\Data\Repositories\FleetRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteFleetTask extends ParentTask
{
    public function __construct(
        private readonly FleetRepository $repository,
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
