<?php

namespace App\Containers\AppSection\Model\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Model\Tasks\ListModelsTask;
use App\Containers\AppSection\Model\UI\API\Requests\ListModelsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListModelsAction extends ParentAction
{
    public function __construct(
        private readonly ListModelsTask $listModelsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListModelsRequest $request): mixed
    {
        return $this->listModelsTask->run();
    }
}
