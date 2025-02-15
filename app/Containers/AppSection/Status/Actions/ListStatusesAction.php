<?php

namespace App\Containers\AppSection\Status\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Status\Tasks\ListStatusesTask;
use App\Containers\AppSection\Status\UI\API\Requests\ListStatusesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListStatusesAction extends ParentAction
{
    public function __construct(
        private readonly ListStatusesTask $listStatusesTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListStatusesRequest $request): mixed
    {
        return $this->listStatusesTask->run();
    }
}
