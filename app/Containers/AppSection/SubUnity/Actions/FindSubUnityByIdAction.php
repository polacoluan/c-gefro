<?php

namespace App\Containers\AppSection\SubUnity\Actions;

use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Containers\AppSection\SubUnity\Tasks\FindSubUnityByIdTask;
use App\Containers\AppSection\SubUnity\UI\API\Requests\FindSubUnityByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindSubUnityByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindSubUnityByIdTask $findSubUnityByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindSubUnityByIdRequest $request): SubUnity
    {
        return $this->findSubUnityByIdTask->run($request->id);
    }
}
