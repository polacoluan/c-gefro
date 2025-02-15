<?php

namespace App\Containers\AppSection\Mark\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Mark\Tasks\ListMarksTask;
use App\Containers\AppSection\Mark\UI\API\Requests\ListMarksRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListMarksAction extends ParentAction
{
    public function __construct(
        private readonly ListMarksTask $listMarksTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListMarksRequest $request): mixed
    {
        return $this->listMarksTask->run();
    }
}
