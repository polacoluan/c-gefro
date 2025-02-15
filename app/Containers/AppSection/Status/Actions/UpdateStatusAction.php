<?php

namespace App\Containers\AppSection\Status\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Status\Models\Status;
use App\Containers\AppSection\Status\Tasks\UpdateStatusTask;
use App\Containers\AppSection\Status\UI\API\Requests\UpdateStatusRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateStatusAction extends ParentAction
{
    public function __construct(
        private readonly UpdateStatusTask $updateStatusTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateStatusRequest $request): Status
    {
        $data = $request->sanitizeInput([
            'status',
            'description'
        ]);

        return $this->updateStatusTask->run($data, $request->id);
    }
}
