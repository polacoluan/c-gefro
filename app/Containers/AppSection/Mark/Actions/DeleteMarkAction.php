<?php

namespace App\Containers\AppSection\Mark\Actions;

use App\Containers\AppSection\Mark\Tasks\DeleteMarkTask;
use App\Containers\AppSection\Mark\UI\API\Requests\DeleteMarkRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteMarkAction extends ParentAction
{
    public function __construct(
        private readonly DeleteMarkTask $deleteMarkTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteMarkRequest $request): int
    {
        return $this->deleteMarkTask->run($request->id);
    }
}
