<?php

namespace App\Containers\AppSection\Mark\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Mark\Models\Mark;
use App\Containers\AppSection\Mark\Tasks\UpdateMarkTask;
use App\Containers\AppSection\Mark\UI\API\Requests\UpdateMarkRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateMarkAction extends ParentAction
{
    public function __construct(
        private readonly UpdateMarkTask $updateMarkTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateMarkRequest $request): Mark
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->updateMarkTask->run($data, $request->id);
    }
}
