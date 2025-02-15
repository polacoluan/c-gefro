<?php

/**
 * @apiGroup           Status
 * @apiName            Invoke
 *
 * @api                {POST} /v1/status Invoke
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

use App\Containers\AppSection\Status\UI\API\Controllers\CreateStatusController;
use Illuminate\Support\Facades\Route;

Route::post('status', CreateStatusController::class)
    ->middleware(['auth:api']);

