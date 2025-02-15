<?php

namespace App\Containers\AppSection\Model\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Model\Models\Model;
use App\Containers\AppSection\Model\Tasks\CreateModelTask;
use App\Containers\AppSection\Model\UI\API\Requests\CreateModelRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateModelAction extends ParentAction
{
    public function __construct(
        private readonly CreateModelTask $createModelTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateModelRequest $request): Model
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->createModelTask->run($data);
    }
}
