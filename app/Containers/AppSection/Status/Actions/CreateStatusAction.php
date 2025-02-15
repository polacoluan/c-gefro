<?php

namespace App\Containers\AppSection\Status\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Status\Models\Status;
use App\Containers\AppSection\Status\Tasks\CreateStatusTask;
use App\Containers\AppSection\Status\UI\API\Requests\CreateStatusRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateStatusAction extends ParentAction
{
    public function __construct(
        private readonly CreateStatusTask $createStatusTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateStatusRequest $request): Status
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->createStatusTask->run($data);
    }
}
