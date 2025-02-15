<?php

namespace App\Containers\AppSection\Color\Tasks;

use App\Containers\AppSection\Color\Data\Repositories\ColorRepository;
use App\Containers\AppSection\Color\Models\Color;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindColorByIdTask extends ParentTask
{
    public function __construct(
        private readonly ColorRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Color
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
