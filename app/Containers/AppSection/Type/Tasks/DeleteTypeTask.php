<?php

namespace App\Containers\AppSection\Type\Tasks;

use App\Containers\AppSection\Type\Data\Repositories\TypeRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteTypeTask extends ParentTask
{
    public function __construct(
        private readonly TypeRepository $repository,
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
