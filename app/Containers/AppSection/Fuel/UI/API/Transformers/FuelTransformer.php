<?php

namespace App\Containers\AppSection\Fuel\UI\API\Transformers;

use App\Containers\AppSection\Fuel\Models\Fuel;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class FuelTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Fuel $fuel): array
    {
        return [
            'object' => $fuel->getResourceKey(),
            'id' => $fuel->getHashedKey(),
            'fuel' => $fuel->fuel,
            'description' => $fuel->description,
            'created_at' => $fuel->created_at,
            'updated_at' => $fuel->updated_at,
            'readable_created_at' => $fuel->created_at->diffForHumans(),
            'readable_updated_at' => $fuel->updated_at->diffForHumans(),
        ];
    }
}
