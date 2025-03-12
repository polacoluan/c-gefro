<?php

namespace App\Containers\AppSection\Maintenance\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateMaintenanceRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => null,
        'roles' => null,
    ];

    protected array $decode = [
        'vehicle_id',
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
