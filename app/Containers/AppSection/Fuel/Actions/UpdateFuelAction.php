<?php

namespace App\Containers\AppSection\Fuel\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Containers\AppSection\Fuel\Tasks\UpdateFuelTask;
use App\Containers\AppSection\Fuel\UI\API\Requests\UpdateFuelRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateFuelAction extends ParentAction
{
    public function __construct(
        private readonly UpdateFuelTask $updateFuelTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateFuelRequest $request): Fuel
    {
        $data = $request->sanitizeInput([
            'fuel',
            'description'
        ]);

        return $this->updateFuelTask->run($data, $request->id);
    }
}
