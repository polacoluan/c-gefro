<?php

namespace App\Containers\AppSection\Origin\Tasks;

use App\Containers\AppSection\Origin\Data\Repositories\OriginRepository;
use App\Containers\AppSection\Origin\Models\Origin;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindOriginByIdTask extends ParentTask
{
    public function __construct(
        private readonly OriginRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Origin
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
