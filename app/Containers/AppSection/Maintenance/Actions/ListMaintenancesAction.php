<?php

namespace App\Containers\AppSection\Maintenance\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Maintenance\Tasks\ListMaintenancesTask;
use App\Containers\AppSection\Maintenance\UI\API\Requests\ListMaintenancesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListMaintenancesAction extends ParentAction
{
    public function __construct(
        private readonly ListMaintenancesTask $listMaintenancesTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListMaintenancesRequest $request): mixed
    {
        return $this->listMaintenancesTask->run();
    }
}
