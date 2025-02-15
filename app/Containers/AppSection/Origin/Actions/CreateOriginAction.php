<?php

namespace App\Containers\AppSection\Origin\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Origin\Models\Origin;
use App\Containers\AppSection\Origin\Tasks\CreateOriginTask;
use App\Containers\AppSection\Origin\UI\API\Requests\CreateOriginRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateOriginAction extends ParentAction
{
    public function __construct(
        private readonly CreateOriginTask $createOriginTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateOriginRequest $request): Origin
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->createOriginTask->run($data);
    }
}
