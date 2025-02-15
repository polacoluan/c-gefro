<?php

namespace App\Containers\AppSection\Color\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Color\Models\Color;
use App\Containers\AppSection\Color\Tasks\UpdateColorTask;
use App\Containers\AppSection\Color\UI\API\Requests\UpdateColorRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateColorAction extends ParentAction
{
    public function __construct(
        private readonly UpdateColorTask $updateColorTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateColorRequest $request): Color
    {
        $data = $request->sanitizeInput([
            'color',
            'description'
        ]);

        return $this->updateColorTask->run($data, $request->id);
    }
}
