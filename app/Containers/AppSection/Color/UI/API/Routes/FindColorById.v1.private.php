<?php

/**
 * @apiGroup           Color
 * @apiName            Invoke
 *
 * @api                {GET} /v1/color/:id Invoke
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

use App\Containers\AppSection\Color\UI\API\Controllers\FindColorByIdController;
use Illuminate\Support\Facades\Route;

Route::get('color/{id}', FindColorByIdController::class)
    ->middleware(['auth:api']);

