<?php

namespace App\Containers\AppSection\Origin\Tasks;

use App\Containers\AppSection\Origin\Data\Repositories\OriginRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteOriginTask extends ParentTask
{
    public function __construct(
        private readonly OriginRepository $repository,
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
