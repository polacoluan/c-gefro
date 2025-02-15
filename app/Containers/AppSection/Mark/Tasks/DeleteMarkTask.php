<?php

namespace App\Containers\AppSection\Mark\Tasks;

use App\Containers\AppSection\Mark\Data\Repositories\MarkRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteMarkTask extends ParentTask
{
    public function __construct(
        private readonly MarkRepository $repository,
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
