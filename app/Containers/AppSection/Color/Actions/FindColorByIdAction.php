<?php

namespace App\Containers\AppSection\Color\Actions;

use App\Containers\AppSection\Color\Models\Color;
use App\Containers\AppSection\Color\Tasks\FindColorByIdTask;
use App\Containers\AppSection\Color\UI\API\Requests\FindColorByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindColorByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindColorByIdTask $findColorByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindColorByIdRequest $request): Color
    {
        return $this->findColorByIdTask->run($request->id);
    }
}
