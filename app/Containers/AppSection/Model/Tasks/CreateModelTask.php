<?php

namespace App\Containers\AppSection\Model\Tasks;

use App\Containers\AppSection\Model\Data\Repositories\ModelRepository;
use App\Containers\AppSection\Model\Models\Model;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateModelTask extends ParentTask
{
    public function __construct(
        private readonly ModelRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Model
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
