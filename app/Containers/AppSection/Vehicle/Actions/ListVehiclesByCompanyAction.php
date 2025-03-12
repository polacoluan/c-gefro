<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Containers\AppSection\Vehicle\Tasks\ListVehiclesTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\ListVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListVehiclesByCompanyAction extends ParentAction
{
    public function __construct(
        private readonly ListVehiclesTask $listVehiclesTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $vehiclesByCompany = Vehicle::selectRaw('company_id, COUNT(*) as total')
            ->groupBy('company_id')
            ->with('company')
            ->get()
            ->map(function ($item) {
                return [
                    'company' => $item->company ? $item->company->company : 'Desconhecido',
                    'total' => $item->total
                ];
            })
            ->sortByDesc('total')
            ->values();

        return ['data' => $vehiclesByCompany];
    }
}
