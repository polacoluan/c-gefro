<?php

/**
 * @apiGroup           Model
 * @apiName            Invoke
 *
 * @api                {POST} /v1/model Invoke
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

use App\Containers\AppSection\Model\UI\API\Controllers\CreateModelController;
use Illuminate\Support\Facades\Route;

Route::post('model', CreateModelController::class)
    ->middleware(['auth:api']);

