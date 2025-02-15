<?php

namespace App\Containers\AppSection\Mark\Tasks;

use App\Containers\AppSection\Mark\Data\Repositories\MarkRepository;
use App\Containers\AppSection\Mark\Models\Mark;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateMarkTask extends ParentTask
{
    public function __construct(
        private readonly MarkRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Mark
    {
        try {
            return $this->repository->create($data);
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
