<?php

namespace App\Containers\AppSection\Color\UI\API\Transformers;

use App\Containers\AppSection\Color\Models\Color;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ColorTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Color $color): array
    {
        return [
            'object' => $color->getResourceKey(),
            'id' => $color->getHashedKey(),
            'created_at' => $color->created_at,
            'updated_at' => $color->updated_at,
            'readable_created_at' => $color->created_at->diffForHumans(),
            'readable_updated_at' => $color->updated_at->diffForHumans(),
        ];
    }
}
