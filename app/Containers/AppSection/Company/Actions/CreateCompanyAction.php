<?php

namespace App\Containers\AppSection\Company\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Company\Models\Company;
use App\Containers\AppSection\Company\Tasks\CreateCompanyTask;
use App\Containers\AppSection\Company\UI\API\Requests\CreateCompanyRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateCompanyAction extends ParentAction
{
    public function __construct(
        private readonly CreateCompanyTask $createCompanyTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateCompanyRequest $request): Company
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->createCompanyTask->run($data);
    }
}
