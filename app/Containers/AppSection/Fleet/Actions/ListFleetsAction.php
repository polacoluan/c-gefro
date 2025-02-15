<?php

namespace App\Containers\AppSection\Fleet\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Fleet\Tasks\ListFleetsTask;
use App\Containers\AppSection\Fleet\UI\API\Requests\ListFleetsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListFleetsAction extends ParentAction
{
    public function __construct(
        private readonly ListFleetsTask $listFleetsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListFleetsRequest $request): mixed
    {
        return $this->listFleetsTask->run();
    }
}
