<?php

namespace App\Containers\AppSection\SubUnity\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\SubUnity\Tasks\ListSubUnitiesTask;
use App\Containers\AppSection\SubUnity\UI\API\Requests\ListSubUnitiesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListSubUnitiesAction extends ParentAction
{
    public function __construct(
        private readonly ListSubUnitiesTask $listSubUnitiesTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListSubUnitiesRequest $request): mixed
    {
        return $this->listSubUnitiesTask->run();
    }
}
