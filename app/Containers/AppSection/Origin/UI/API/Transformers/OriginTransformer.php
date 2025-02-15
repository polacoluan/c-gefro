<?php

namespace App\Containers\AppSection\Origin\UI\API\Transformers;

use App\Containers\AppSection\Origin\Models\Origin;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class OriginTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Origin $origin): array
    {
        return [
            'object' => $origin->getResourceKey(),
            'id' => $origin->getHashedKey(),
            'created_at' => $origin->created_at,
            'updated_at' => $origin->updated_at,
            'readable_created_at' => $origin->created_at->diffForHumans(),
            'readable_updated_at' => $origin->updated_at->diffForHumans(),
        ];
    }
}
