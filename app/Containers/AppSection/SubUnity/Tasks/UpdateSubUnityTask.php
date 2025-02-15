<?php

namespace App\Containers\AppSection\SubUnity\Tasks;

use App\Containers\AppSection\SubUnity\Data\Repositories\SubUnityRepository;
use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateSubUnityTask extends ParentTask
{
    public function __construct(
        private readonly SubUnityRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): SubUnity
    {
        try {
            return $this->repository->update($data, $id);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
