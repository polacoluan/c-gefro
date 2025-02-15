<?php

namespace App\Containers\AppSection\Fuel\Actions;

use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Containers\AppSection\Fuel\Tasks\FindFuelByIdTask;
use App\Containers\AppSection\Fuel\UI\API\Requests\FindFuelByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindFuelByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindFuelByIdTask $findFuelByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindFuelByIdRequest $request): Fuel
    {
        return $this->findFuelByIdTask->run($request->id);
    }
}
