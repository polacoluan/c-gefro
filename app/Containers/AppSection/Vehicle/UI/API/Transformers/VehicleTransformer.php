<?php

namespace App\Containers\AppSection\Vehicle\UI\API\Transformers;

use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class VehicleTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Vehicle $vehicle): array
    {
        return [
            'object' => $vehicle->getResourceKey(),
            'id' => $vehicle->getHashedKey(),
            'created_at' => $vehicle->created_at,
            'updated_at' => $vehicle->updated_at,
            'readable_created_at' => $vehicle->created_at->diffForHumans(),
            'readable_updated_at' => $vehicle->updated_at->diffForHumans(),
        ];
    }
}
