<?php

namespace App\Containers\AppSection\Origin\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Origin\Tasks\ListOriginsTask;
use App\Containers\AppSection\Origin\UI\API\Requests\ListOriginsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListOriginsAction extends ParentAction
{
    public function __construct(
        private readonly ListOriginsTask $listOriginsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListOriginsRequest $request): mixed
    {
        return $this->listOriginsTask->run();
    }
}
