<?php

namespace App\Containers\AppSection\Fleet\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Containers\AppSection\Fleet\Tasks\CreateFleetTask;
use App\Containers\AppSection\Fleet\UI\API\Requests\CreateFleetRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateFleetAction extends ParentAction
{
    public function __construct(
        private readonly CreateFleetTask $createFleetTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateFleetRequest $request): Fleet
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->createFleetTask->run($data);
    }
}
