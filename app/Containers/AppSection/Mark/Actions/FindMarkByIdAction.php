<?php

namespace App\Containers\AppSection\Mark\Actions;

use App\Containers\AppSection\Mark\Models\Mark;
use App\Containers\AppSection\Mark\Tasks\FindMarkByIdTask;
use App\Containers\AppSection\Mark\UI\API\Requests\FindMarkByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindMarkByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindMarkByIdTask $findMarkByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindMarkByIdRequest $request): Mark
    {
        return $this->findMarkByIdTask->run($request->id);
    }
}
