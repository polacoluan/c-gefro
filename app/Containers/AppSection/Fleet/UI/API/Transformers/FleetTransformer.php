<?php

namespace App\Containers\AppSection\Fleet\UI\API\Transformers;

use App\Containers\AppSection\Fleet\Models\Fleet;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class FleetTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Fleet $fleet): array
    {
        return [
            'object' => $fleet->getResourceKey(),
            'id' => $fleet->getHashedKey(),
            'created_at' => $fleet->created_at,
            'updated_at' => $fleet->updated_at,
            'readable_created_at' => $fleet->created_at->diffForHumans(),
            'readable_updated_at' => $fleet->updated_at->diffForHumans(),
        ];
    }
}
