<?php

namespace App\Containers\AppSection\Vehicle\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateVehicleRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => null,
        'roles' => null,
    ];

    protected array $decode = [
        'color_id',
        'company_id',
        'fleet_id',
        'fuel_id',
        'mark_id',
        'model_id',
        'origin_id',
        'status_id',
        'sub_unity_id',
        'type_id',
    ];

    protected array $urlParameters = [
        // 'id',
    ];

    public function rules(): array
    {
        return [
            // 'id' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
