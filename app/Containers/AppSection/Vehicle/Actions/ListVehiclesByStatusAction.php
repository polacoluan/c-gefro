<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Containers\AppSection\Vehicle\Tasks\ListVehiclesTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\ListVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListVehiclesByStatusAction extends ParentAction
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
        $vehiclesByStatus = Vehicle::selectRaw('status_id, COUNT(*) as total')
            ->groupBy('status_id')
            ->with('status')
            ->get()
            ->map(function ($item) {
                return [
                    'status' => $item->status ? $item->status->status : 'Desconhecido',
                    'total' => $item->total
                ];
            })
            ->sortByDesc('total')
            ->values();

        return ['data' => $vehiclesByStatus];
    }
}
