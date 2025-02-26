<?php

namespace App\Containers\AppSection\Vehicle\Tasks;

use App\Containers\AppSection\Vehicle\Data\Repositories\VehicleRepository;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateVehicleTask extends ParentTask
{
    public function __construct(
        private readonly VehicleRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Vehicle
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
