<?php

namespace App\Containers\AppSection\SubUnity\Tasks;

use App\Containers\AppSection\SubUnity\Data\Repositories\SubUnityRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteSubUnityTask extends ParentTask
{
    public function __construct(
        private readonly SubUnityRepository $repository,
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
