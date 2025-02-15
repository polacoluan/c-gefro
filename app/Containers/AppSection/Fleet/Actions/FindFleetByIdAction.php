<?php

namespace App\Containers\AppSection\Fleet\Actions;

use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Containers\AppSection\Fleet\Tasks\FindFleetByIdTask;
use App\Containers\AppSection\Fleet\UI\API\Requests\FindFleetByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindFleetByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindFleetByIdTask $findFleetByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindFleetByIdRequest $request): Fleet
    {
        return $this->findFleetByIdTask->run($request->id);
    }
}
