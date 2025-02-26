<?php

namespace App\Containers\AppSection\Status\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Status\Tasks\ListStatusTask;
use App\Containers\AppSection\Status\UI\API\Requests\ListStatusRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListStatusAction extends ParentAction
{
    public function __construct(
        private readonly ListStatusTask $listStatusTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListStatusRequest $request): mixed
    {
        return $this->listStatusTask->run();
    }
}
