<?php

namespace App\Containers\AppSection\SubUnity\UI\API\Transformers;

use App\Containers\AppSection\SubUnity\Models\SubUnity;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class SubUnityTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(SubUnity $subunity): array
    {
        return [
            'object' => $subunity->getResourceKey(),
            'id' => $subunity->getHashedKey(),
            'sub_unity' => $subunity->sub_unity,
            'description' => $subunity->description,
            'created_at' => $subunity->created_at,
            'updated_at' => $subunity->updated_at,
            'readable_created_at' => $subunity->created_at->diffForHumans(),
            'readable_updated_at' => $subunity->updated_at->diffForHumans(),
        ];
    }
}
