<?php

/**
 * @apiGroup           Fleet
 * @apiName            Invoke
 *
 * @api                {POST} /v1/fleet Invoke
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

use App\Containers\AppSection\Fleet\UI\API\Controllers\CreateFleetController;
use Illuminate\Support\Facades\Route;

Route::post('fleet', CreateFleetController::class)
    ->middleware(['auth:api']);

