<?php

namespace App\Containers\AppSection\Fuel\Actions;

use App\Containers\AppSection\Fuel\Tasks\DeleteFuelTask;
use App\Containers\AppSection\Fuel\UI\API\Requests\DeleteFuelRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteFuelAction extends ParentAction
{
    public function __construct(
        private readonly DeleteFuelTask $deleteFuelTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteFuelRequest $request): int
    {
        return $this->deleteFuelTask->run($request->id);
    }
}
