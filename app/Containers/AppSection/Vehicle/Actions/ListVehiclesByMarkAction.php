<?php

namespace App\Containers\AppSection\Vehicle\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Vehicle\Models\Vehicle;
use App\Containers\AppSection\Vehicle\Tasks\ListVehiclesTask;
use App\Containers\AppSection\Vehicle\UI\API\Requests\ListVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListVehiclesByMarkAction extends ParentAction
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
        $vehiclesByMark = Vehicle::selectRaw('mark_id, COUNT(*) as total')
            ->groupBy('mark_id')
            ->with('mark')
            ->get()
            ->map(function ($item) {
                return [
                    'mark' => $item->mark ? $item->mark->mark : 'Desconhecido',
                    'total' => $item->total
                ];
            })
            ->sortByDesc('total')
            ->values();

        return ['data' => $vehiclesByMark];
    }
}
