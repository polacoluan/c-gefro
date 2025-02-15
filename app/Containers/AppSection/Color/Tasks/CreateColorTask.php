<?php

namespace App\Containers\AppSection\Color\Tasks;

use App\Containers\AppSection\Color\Data\Repositories\ColorRepository;
use App\Containers\AppSection\Color\Models\Color;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateColorTask extends ParentTask
{
    public function __construct(
        private readonly ColorRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Color
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
