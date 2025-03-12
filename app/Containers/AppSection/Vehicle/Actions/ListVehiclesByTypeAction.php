<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Containers\AppSection\Vehicle\Tasks\ListVehiclesTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\ListVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListVehiclesByTypeAction extends ParentAction
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
        $vehiclesByType = Vehicle::selectRaw('type_id, COUNT(*) as total')
            ->groupBy('type_id')
            ->with('type')
            ->get()
            ->map(function ($item) {
                return [
                    'type' => $item->type ? $item->type->type : 'Desconhecido',
                    'total' => $item->total
                ];
            })
            ->sortByDesc('total')
            ->values();

        return ['data' => $vehiclesByType];
    }
}
