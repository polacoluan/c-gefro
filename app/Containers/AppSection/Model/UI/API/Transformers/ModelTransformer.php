<?php

namespace App\Containers\AppSection\Model\UI\API\Transformers;

use App\Containers\AppSection\Model\Models\Model;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class ModelTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Model $model): array
    {
        return [
            'object' => $model->getResourceKey(),
            'id' => $model->getHashedKey(),
            'model' => $model->model,
            'description' => $model->description,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
            'readable_created_at' => $model->created_at->diffForHumans(),
            'readable_updated_at' => $model->updated_at->diffForHumans(),
        ];
    }
}
