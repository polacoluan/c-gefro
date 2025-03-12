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
            'vehicle' => $vehicle->mark->mark . '/' . $vehicle->model->model,
            'plate' => $vehicle->plate,
            'prefix' => $vehicle->prefix,
            'tracker' => $vehicle->tracker,
            'tracker_pt' => $vehicle->tracker ? 'Sim' : 'Não',
            'chassis' => $vehicle->chassis,
            'engine_number' => $vehicle->engine_number,
            'renavam' => $vehicle->renavam,
            'year' => $vehicle->year,
            'capactiy' => $vehicle->capactiy,
            'color' => $vehicle->color->color,
            'color_id' => $vehicle->color_id,
            'company' => $vehicle->company->company,
            'company_id' => $vehicle->company_id,
            'fleet' => $vehicle->fleet->fleet,
            'fleet_id' => $vehicle->fleet_id,
            'fuel' => $vehicle->fuel->fuel,
            'fuel_id' => $vehicle->fuel_id,
            'mark' => $vehicle->mark->mark,
            'mark_id' => $vehicle->mark_id,
            'model' => $vehicle->model->model,
            'model_id' => $vehicle->model_id,
            'origin' => $vehicle->origin->origin,
            'origin_id' => $vehicle->origin_id,
            'status' => $vehicle->status->status,
            'status_id' => $vehicle->status_id,
            'sub_unity' => $vehicle->subUnity->sub_unity,
            'sub_unity_id' => $vehicle->sub_unity_id,
            'type' => $vehicle->type->type,
            'type_id' => $vehicle->type_id,
            'created_at' => $vehicle->created_at,
            'updated_at' => $vehicle->updated_at,
            'readable_created_at' => $vehicle->created_at->diffForHumans(),
            'readable_updated_at' => $vehicle->updated_at->diffForHumans(),
        ];
    }
}
