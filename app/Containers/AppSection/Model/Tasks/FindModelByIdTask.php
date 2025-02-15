<?php

namespace App\Containers\AppSection\Model\Tasks;

use App\Containers\AppSection\Model\Data\Repositories\ModelRepository;
use App\Containers\AppSection\Model\Models\Model;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindModelByIdTask extends ParentTask
{
    public function __construct(
        private readonly ModelRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Model
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
