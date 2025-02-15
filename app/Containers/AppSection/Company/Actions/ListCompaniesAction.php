<?php

namespace App\Containers\AppSection\Company\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Company\Tasks\ListCompaniesTask;
use App\Containers\AppSection\Company\UI\API\Requests\ListCompaniesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListCompaniesAction extends ParentAction
{
    public function __construct(
        private readonly ListCompaniesTask $listCompaniesTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListCompaniesRequest $request): mixed
    {
        return $this->listCompaniesTask->run();
    }
}
