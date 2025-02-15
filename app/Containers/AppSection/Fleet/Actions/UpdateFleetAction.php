<?php

namespace App\Containers\AppSection\Fleet\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Containers\AppSection\Fleet\Tasks\UpdateFleetTask;
use App\Containers\AppSection\Fleet\UI\API\Requests\UpdateFleetRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateFleetAction extends ParentAction
{
    public function __construct(
        private readonly UpdateFleetTask $updateFleetTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateFleetRequest $request): Fleet
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->updateFleetTask->run($data, $request->id);
    }
}
