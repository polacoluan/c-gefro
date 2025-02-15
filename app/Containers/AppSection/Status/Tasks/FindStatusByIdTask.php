<?php

namespace App\Containers\AppSection\Status\Tasks;

use App\Containers\AppSection\Status\Data\Repositories\StatusRepository;
use App\Containers\AppSection\Status\Models\Status;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindStatusByIdTask extends ParentTask
{
    public function __construct(
        private readonly StatusRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Status
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
