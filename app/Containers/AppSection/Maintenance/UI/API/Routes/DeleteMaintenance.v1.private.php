<?php

/**
 * @apiGroup           Maintenance
 * @apiName            Invoke
 *
 * @api                {DELETE} /v1/maintenances/:id Invoke
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\Maintenance\UI\API\Controllers\DeleteMaintenanceController;
use Illuminate\Support\Facades\Route;

Route::delete('maintenance/{id}', DeleteMaintenanceController::class)
    ->middleware(['auth:api']);

