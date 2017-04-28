<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app(Dingo\Api\Routing\Router::class);

$api->version('v1', function ($api) {
    $api->post('authenticate', 'Shed\Http\Controllers\Auth\AuthenticateController@authenticate');

//    $api->group(['protected' => true], function ($api) {
//        $api->group(['middleware' => 'api.auth'], function ($api) {
            $api->post('logout', 'Shed\Http\Controllers\Auth\AuthenticateController@logout');

            $api->group(['prefix' => 'user'], function ($api) {
                $api->get('/', function () {
                    $user = app(Dingo\Api\Auth\Auth::class)->user();

                    return $user;
                });
            });

            $api->resource('mechanists', Shed\Http\Controllers\MechanistController::class);

            $api->resource('users', Shed\Http\Controllers\UserController::class, [
                'except' => ['index'],
            ]);
//        });

        $api->get('token', 'Shed\Http\Controllers\Auth\AuthenticateController@getToken');
//    });
});
