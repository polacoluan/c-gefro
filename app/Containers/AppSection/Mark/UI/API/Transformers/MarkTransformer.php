<?php

namespace App\Containers\AppSection\Mark\UI\API\Transformers;

use App\Containers\AppSection\Mark\Models\Mark;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class MarkTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Mark $mark): array
    {
        return [
            'object' => $mark->getResourceKey(),
            'id' => $mark->getHashedKey(),
            'mark' => $mark->mark,
            'description' => $mark->description,
            'created_at' => $mark->created_at,
            'updated_at' => $mark->updated_at,
            'readable_created_at' => $mark->created_at->diffForHumans(),
            'readable_updated_at' => $mark->updated_at->diffForHumans(),
        ];
    }
}
