<?php

/**
 * @apiGroup           Status
 * @apiName            Invoke
 *
 * @api                {DELETE} /v1/status/:id Invoke
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

use App\Containers\AppSection\Status\UI\API\Controllers\DeleteStatusController;
use Illuminate\Support\Facades\Route;

Route::delete('status/{id}', DeleteStatusController::class)
    ->middleware(['auth:api']);

