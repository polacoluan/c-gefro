<?php

namespace App\Containers\AppSection\Status\Actions;

use App\Containers\AppSection\Status\Models\Status;
use App\Containers\AppSection\Status\Tasks\FindStatusByIdTask;
use App\Containers\AppSection\Status\UI\API\Requests\FindStatusByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindStatusByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindStatusByIdTask $findStatusByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindStatusByIdRequest $request): Status
    {
        return $this->findStatusByIdTask->run($request->id);
    }
}
