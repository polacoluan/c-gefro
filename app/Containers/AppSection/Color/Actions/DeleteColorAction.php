<?php

namespace App\Containers\AppSection\Color\Actions;

use App\Containers\AppSection\Color\Tasks\DeleteColorTask;
use App\Containers\AppSection\Color\UI\API\Requests\DeleteColorRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteColorAction extends ParentAction
{
    public function __construct(
        private readonly DeleteColorTask $deleteColorTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteColorRequest $request): int
    {
        return $this->deleteColorTask->run($request->id);
    }
}
