<?php

namespace App\Containers\AppSection\SubUnity\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Containers\AppSection\SubUnity\Tasks\UpdateSubUnityTask;
use App\Containers\AppSection\SubUnity\UI\API\Requests\UpdateSubUnityRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateSubUnityAction extends ParentAction
{
    public function __construct(
        private readonly UpdateSubUnityTask $updateSubUnityTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateSubUnityRequest $request): SubUnity
    {
        $data = $request->sanitizeInput([
            'sub_unity',
            'description'
        ]);

        return $this->updateSubUnityTask->run($data, $request->id);
    }
}
