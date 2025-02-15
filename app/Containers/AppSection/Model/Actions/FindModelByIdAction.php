<?php

namespace App\Containers\AppSection\Model\Actions;

use App\Containers\AppSection\Model\Models\Model;
use App\Containers\AppSection\Model\Tasks\FindModelByIdTask;
use App\Containers\AppSection\Model\UI\API\Requests\FindModelByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindModelByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindModelByIdTask $findModelByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindModelByIdRequest $request): Model
    {
        return $this->findModelByIdTask->run($request->id);
    }
}
