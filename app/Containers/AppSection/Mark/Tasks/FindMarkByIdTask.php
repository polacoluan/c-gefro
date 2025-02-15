<?php

namespace App\Containers\AppSection\Mark\Tasks;

use App\Containers\AppSection\Mark\Data\Repositories\MarkRepository;
use App\Containers\AppSection\Mark\Models\Mark;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindMarkByIdTask extends ParentTask
{
    public function __construct(
        private readonly MarkRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Mark
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
