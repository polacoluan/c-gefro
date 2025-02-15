<?php

namespace App\Containers\AppSection\Status\UI\API\Transformers;

use App\Containers\AppSection\Status\Models\Status;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class StatusTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Status $status): array
    {
        return [
            'object' => $status->getResourceKey(),
            'id' => $status->getHashedKey(),
            'created_at' => $status->created_at,
            'updated_at' => $status->updated_at,
            'readable_created_at' => $status->created_at->diffForHumans(),
            'readable_updated_at' => $status->updated_at->diffForHumans(),
        ];
    }
}
