<?php

namespace App\Containers\AppSection\Maintenance\Tasks;

use App\Containers\AppSection\Maintenance\Data\Repositories\MaintenanceRepository;
use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateMaintenanceTask extends ParentTask
{
    public function __construct(
        private readonly MaintenanceRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Maintenance
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
