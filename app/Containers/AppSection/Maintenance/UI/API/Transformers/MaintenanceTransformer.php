<?php

namespace App\Containers\AppSection\Maintenance\UI\API\Transformers;

use App\Containers\AppSection\Maintenance\Models\Maintenance;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class MaintenanceTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];
    public function transform(Maintenance $maintenance): array
    {
        return [
            'object' => $maintenance->getResourceKey(),
            'id' => $maintenance->getHashedKey(),
            'created_at' => $maintenance->created_at,
            'vehicle_id' => $maintenance->vehicle_id,
            'vehicle' =>
                $maintenance->vehicle->mark->mark . '/' .
                $maintenance->vehicle->model->model . ' | ' .
                $maintenance->vehicle->plate,
            'maintenance' => $maintenance->maintenance,
            'description' => $maintenance->description,
            'cost' => $maintenance->cost,
            'kilometers' => $maintenance->kilometers,
            'date' => $maintenance->date,
            'next_maintenance' => $maintenance->next_maintenance,
            'updated_at' => $maintenance->updated_at,
            'readable_created_at' => $maintenance->created_at->diffForHumans(),
            'readable_updated_at' => $maintenance->updated_at->diffForHumans(),
        ];
    }
}
