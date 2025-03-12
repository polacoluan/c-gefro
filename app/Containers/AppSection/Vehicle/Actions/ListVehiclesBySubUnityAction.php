<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Containers\AppSection\Vehicle\Tasks\ListVehiclesTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\ListVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListVehiclesBySubUnityAction extends ParentAction
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
        $vehiclesBySubUnity = Vehicle::selectRaw('sub_unity_id, COUNT(*) as total')
            ->groupBy('sub_unity_id')
            ->with('subUnity')
            ->get()
            ->map(function ($item) {
                return [
                    'sub_unity' => $item->subUnity ? $item->subUnity->sub_unity : 'Desconhecido',
                    'total' => $item->total
                ];
            })
            ->sortByDesc('total')
            ->values();

        return ['data' => $vehiclesBySubUnity];
    }
}
