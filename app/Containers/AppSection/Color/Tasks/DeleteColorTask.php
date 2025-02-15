<?php

namespace App\Containers\AppSection\Color\Tasks;

use App\Containers\AppSection\Color\Data\Repositories\ColorRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class DeleteColorTask extends ParentTask
{
    public function __construct(
        private readonly ColorRepository $repository,
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
