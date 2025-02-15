<?php

namespace App\Containers\AppSection\Model\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Model\Models\Model;
use App\Containers\AppSection\Model\Tasks\UpdateModelTask;
use App\Containers\AppSection\Model\UI\API\Requests\UpdateModelRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateModelAction extends ParentAction
{
    public function __construct(
        private readonly UpdateModelTask $updateModelTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateModelRequest $request): Model
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->updateModelTask->run($data, $request->id);
    }
}
