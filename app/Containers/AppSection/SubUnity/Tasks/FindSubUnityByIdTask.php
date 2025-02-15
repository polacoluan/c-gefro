<?php

namespace App\Containers\AppSection\SubUnity\Tasks;

use App\Containers\AppSection\SubUnity\Data\Repositories\SubUnityRepository;
use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindSubUnityByIdTask extends ParentTask
{
    public function __construct(
        private readonly SubUnityRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): SubUnity
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
