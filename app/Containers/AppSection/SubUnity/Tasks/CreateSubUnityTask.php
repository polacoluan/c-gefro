<?php

namespace App\Containers\AppSection\SubUnity\Tasks;

use App\Containers\AppSection\SubUnity\Data\Repositories\SubUnityRepository;
use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateSubUnityTask extends ParentTask
{
    public function __construct(
        private readonly SubUnityRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): SubUnity
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
