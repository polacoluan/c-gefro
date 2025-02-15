<?php

namespace App\Containers\AppSection\Fuel\Tasks;

use App\Containers\AppSection\Fuel\Data\Repositories\FuelRepository;
use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateFuelTask extends ParentTask
{
    public function __construct(
        private readonly FuelRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Fuel
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
