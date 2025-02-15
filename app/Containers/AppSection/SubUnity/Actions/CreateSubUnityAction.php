<?php

namespace App\Containers\AppSection\SubUnity\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Containers\AppSection\SubUnity\Tasks\CreateSubUnityTask;
use App\Containers\AppSection\SubUnity\UI\API\Requests\CreateSubUnityRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateSubUnityAction extends ParentAction
{
    public function __construct(
        private readonly CreateSubUnityTask $createSubUnityTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateSubUnityRequest $request): SubUnity
    {
        $data = $request->sanitizeInput([
            'sub_unity',
            'description'
        ]);

        return $this->createSubUnityTask->run($data);
    }
}
