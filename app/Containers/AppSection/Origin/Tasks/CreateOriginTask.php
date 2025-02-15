<?php

namespace App\Containers\AppSection\Origin\Tasks;

use App\Containers\AppSection\Origin\Data\Repositories\OriginRepository;
use App\Containers\AppSection\Origin\Models\Origin;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateOriginTask extends ParentTask
{
    public function __construct(
        private readonly OriginRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Origin
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
