<?php

namespace App\Containers\AppSection\Mark\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Mark\Actions\CreateMarkAction;
use App\Containers\AppSection\Mark\UI\API\Requests\CreateMarkRequest;
use App\Containers\AppSection\Mark\UI\API\Transformers\MarkTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateMarkController extends ApiController
{
    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateMarkRequest $request, CreateMarkAction $action): JsonResponse
    {
        $mark = $action->run($request);

        return $this->created($this->transform($mark, MarkTransformer::class));
    }
}
