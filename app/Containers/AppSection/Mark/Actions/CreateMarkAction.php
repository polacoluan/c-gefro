<?php

namespace App\Containers\AppSection\Mark\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Mark\Models\Mark;
use App\Containers\AppSection\Mark\Tasks\CreateMarkTask;
use App\Containers\AppSection\Mark\UI\API\Requests\CreateMarkRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateMarkAction extends ParentAction
{
    public function __construct(
        private readonly CreateMarkTask $createMarkTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateMarkRequest $request): Mark
    {
        $data = $request->sanitizeInput([
            'mark',
            'description'
        ]);

        return $this->createMarkTask->run($data);
    }
}
