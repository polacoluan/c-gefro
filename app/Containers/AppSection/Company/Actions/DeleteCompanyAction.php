<?php

namespace App\Containers\AppSection\Company\Actions;

use App\Containers\AppSection\Company\Tasks\DeleteCompanyTask;
use App\Containers\AppSection\Company\UI\API\Requests\DeleteCompanyRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteCompanyAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCompanyTask $deleteCompanyTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteCompanyRequest $request): int
    {
        return $this->deleteCompanyTask->run($request->id);
    }
}
