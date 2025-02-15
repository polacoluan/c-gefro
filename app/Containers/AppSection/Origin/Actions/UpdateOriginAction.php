<?php

namespace App\Containers\AppSection\Origin\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Origin\Models\Origin;
use App\Containers\AppSection\Origin\Tasks\UpdateOriginTask;
use App\Containers\AppSection\Origin\UI\API\Requests\UpdateOriginRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateOriginAction extends ParentAction
{
    public function __construct(
        private readonly UpdateOriginTask $updateOriginTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateOriginRequest $request): Origin
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->updateOriginTask->run($data, $request->id);
    }
}
