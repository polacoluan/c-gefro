<?php

namespace App\Containers\AppSection\Color\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Color\Models\Color;
use App\Containers\AppSection\Color\Tasks\CreateColorTask;
use App\Containers\AppSection\Color\UI\API\Requests\CreateColorRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateColorAction extends ParentAction
{
    public function __construct(
        private readonly CreateColorTask $createColorTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateColorRequest $request): Color
    {
        $data = $request->sanitizeInput([
            'color',
            'description'
        ]);

        return $this->createColorTask->run($data);
    }
}
