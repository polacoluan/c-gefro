<?php

namespace App\Containers\AppSection\Company\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Company\Models\Company;
use App\Containers\AppSection\Company\Tasks\UpdateCompanyTask;
use App\Containers\AppSection\Company\UI\API\Requests\UpdateCompanyRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateCompanyAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCompanyTask $updateCompanyTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateCompanyRequest $request): Company
    {
        $data = $request->sanitizeInput([
            'company',
            'description'
        ]);

        return $this->updateCompanyTask->run($data, $request->id);
    }
}
