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

    $api->resource('register', Shed\Http\Controllers\UserController::class, [
        'only' => ['store'],
    ]);

    $api->group(['protected' => true], function ($api) {
        $api->group(['middleware' => 'api.auth'], function ($api) {
            $api->post('logout', 'Shed\Http\Controllers\Auth\AuthenticateController@logout');

            $api->group(['prefix' => 'user'], function ($api) {
                $api->get('/', function () {
                    $user = app(Dingo\Api\Auth\Auth::class)->user();

                    return $user;
                });

                $api->get('reviews', function () {
                    $user = app(Dingo\Api\Auth\Auth::class)->user();

                    return $user->reviews->load('mechanist');
                });
            });

            $api->resource('mechanists', Shed\Http\Controllers\MechanistController::class);

            $api->resource('mechanists.reviews', Shed\Http\Controllers\ReviewController::class, [
                'except' => ['update'],
            ]);

            $api->resource('users', Shed\Http\Controllers\UserController::class, [
                'except' => ['index', 'destroy', 'store'],
            ]);

            $api->resource('states', Shed\Http\Controllers\StateController::class, [
                'only' => ['index', 'show'],
            ]);

            $api->resource('states.cities', Shed\Http\Controllers\CityController::class, [
                'only' => ['index', 'show'],
            ]);

            $api->resource('cities', Shed\Http\Controllers\CityController::class, [
                'only' => ['index', 'show'],
            ]);
        });

        $api->get('token', 'Shed\Http\Controllers\Auth\AuthenticateController@getToken');
    });
});
