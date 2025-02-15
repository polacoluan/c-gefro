<?php

namespace App\Containers\AppSection\Origin\Tasks;

use App\Containers\AppSection\Origin\Data\Repositories\OriginRepository;
use App\Containers\AppSection\Origin\Models\Origin;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateOriginTask extends ParentTask
{
    public function __construct(
        private readonly OriginRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Origin
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
