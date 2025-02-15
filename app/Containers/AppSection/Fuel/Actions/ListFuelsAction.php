<?php

namespace App\Containers\AppSection\Fuel\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Fuel\Tasks\ListFuelsTask;
use App\Containers\AppSection\Fuel\UI\API\Requests\ListFuelsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListFuelsAction extends ParentAction
{
    public function __construct(
        private readonly ListFuelsTask $listFuelsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListFuelsRequest $request): mixed
    {
        return $this->listFuelsTask->run();
    }
}
