<?php

namespace App\Containers\AppSection\Color\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Color\Tasks\ListColorsTask;
use App\Containers\AppSection\Color\UI\API\Requests\ListColorsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListColorsAction extends ParentAction
{
    public function __construct(
        private readonly ListColorsTask $listColorsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListColorsRequest $request): mixed
    {
        return $this->listColorsTask->run();
    }
}
