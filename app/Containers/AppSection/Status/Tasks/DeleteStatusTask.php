<?php

namespace App\Containers\AppSection\Status\Tasks;

use App\Containers\AppSection\Status\Data\Repositories\StatusRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteStatusTask extends ParentTask
{
    public function __construct(
        private readonly StatusRepository $repository,
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
