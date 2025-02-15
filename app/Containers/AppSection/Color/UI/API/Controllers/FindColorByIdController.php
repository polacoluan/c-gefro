<?php

namespace App\Containers\AppSection\Color\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Color\Actions\FindColorByIdAction;
use App\Containers\AppSection\Color\UI\API\Requests\FindColorByIdRequest;
use App\Containers\AppSection\Color\UI\API\Transformers\ColorTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindColorByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(FindColorByIdRequest $request, FindColorByIdAction $action): array
    {
        $color = $action->run($request);

        return $this->transform($color, ColorTransformer::class);
    }
}
