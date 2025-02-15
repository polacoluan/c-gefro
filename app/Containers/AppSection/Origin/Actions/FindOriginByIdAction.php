<?php

namespace App\Containers\AppSection\Origin\Actions;

use App\Containers\AppSection\Origin\Models\Origin;
use App\Containers\AppSection\Origin\Tasks\FindOriginByIdTask;
use App\Containers\AppSection\Origin\UI\API\Requests\FindOriginByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindOriginByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindOriginByIdTask $findOriginByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindOriginByIdRequest $request): Origin
    {
        return $this->findOriginByIdTask->run($request->id);
    }
}
