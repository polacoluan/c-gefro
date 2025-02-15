<?php

namespace App\Containers\AppSection\Model\Tasks;

use App\Containers\AppSection\Model\Data\Repositories\ModelRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteModelTask extends ParentTask
{
    public function __construct(
        private readonly ModelRepository $repository,
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
