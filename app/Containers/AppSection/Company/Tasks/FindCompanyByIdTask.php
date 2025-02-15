<?php

namespace App\Containers\AppSection\Company\Tasks;

use App\Containers\AppSection\Company\Data\Repositories\CompanyRepository;
use App\Containers\AppSection\Company\Models\Company;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindCompanyByIdTask extends ParentTask
{
    public function __construct(
        private readonly CompanyRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Company
    {
        try {
            return $this->repository->find($id);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
