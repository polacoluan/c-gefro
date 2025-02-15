<?php

namespace App\Containers\AppSection\Fuel\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Containers\AppSection\Fuel\Tasks\CreateFuelTask;
use App\Containers\AppSection\Fuel\UI\API\Requests\CreateFuelRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateFuelAction extends ParentAction
{
    public function __construct(
        private readonly CreateFuelTask $createFuelTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateFuelRequest $request): Fuel
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->createFuelTask->run($data);
    }
}
