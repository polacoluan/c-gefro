<?php

/**
 * @apiGroup           SubUnity
 * @apiName            Invoke
 *
 * @api                {GET} /v1/sub-unity/:id Invoke
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

use App\Containers\AppSection\SubUnity\UI\API\Controllers\FindSubUnityByIdController;
use Illuminate\Support\Facades\Route;

Route::get('sub-unity/{id}', FindSubUnityByIdController::class)
    ->middleware(['auth:api']);

