<?php

namespace App\Containers\AppSection\Mark\Tasks;

use App\Containers\AppSection\Mark\Data\Repositories\MarkRepository;
use App\Containers\AppSection\Mark\Models\Mark;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateMarkTask extends ParentTask
{
    public function __construct(
        private readonly MarkRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Mark
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
