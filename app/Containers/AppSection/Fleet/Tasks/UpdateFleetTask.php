<?php

namespace App\Containers\AppSection\Fleet\Tasks;

use App\Containers\AppSection\Fleet\Data\Repositories\FleetRepository;
use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateFleetTask extends ParentTask
{
    public function __construct(
        private readonly FleetRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Fleet
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
