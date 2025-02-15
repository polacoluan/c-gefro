<?php

/**
 * @apiGroup           Mark
 * @apiName            Invoke
 *
 * @api                {POST} /v1/mark Invoke
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

use App\Containers\AppSection\Mark\UI\API\Controllers\CreateMarkController;
use Illuminate\Support\Facades\Route;

Route::post('mark', CreateMarkController::class)
    ->middleware(['auth:api']);

