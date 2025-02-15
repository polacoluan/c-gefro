<?php

namespace App\Containers\AppSection\Fleet\Tasks;

use App\Containers\AppSection\Fleet\Data\Repositories\FleetRepository;
use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateFleetTask extends ParentTask
{
    public function __construct(
        private readonly FleetRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Fleet
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
