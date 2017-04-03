<?php

use Illuminate\Http\Request;
use Vinkla\Pusher\Facades\Pusher;

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

$api = app(\Dingo\Api\Routing\Router::class);

$api->version('v1', function ($api)
{
    // API
    $api->group(['middleware' => ['api.auth', 'api']], function ($api)
    {
        $except = ['except' => ['create', 'edit']];
        $api->resource('age_range', ipmedt5c\Http\Controllers\AgeRangeController::class, $except);
        $api->resource('game',    \ipmedt5c\Http\Controllers\GameController::class, $except);
        $api->resource('genre',    \ipmedt5c\Http\Controllers\GenreController::class, $except);
        $api->resource('platform',    \ipmedt5c\Http\Controllers\PlatformController::class, $except);
        $api->resource('product',    \ipmedt5c\Http\Controllers\ProductController::class, $except);
        $api->resource('publisher',    \ipmedt5c\Http\Controllers\PublisherController::class, $except);
        $api->resource('video',    \ipmedt5c\Http\Controllers\VideoController::class, $except);

    });
    // Authenticate
    $api->post('authenticate',              ['as' => 'authenticate.user',  'uses' => '\ipmedt5c\Http\Controllers\AuthenticateController@authenticate']);
    $api->post('authenticate/checkuser',    ['as' => 'authenticate.checkuser',  'uses' => '\ipmedt5c\Http\Controllers\AuthenticateController@authenticateCheck']);
//    $api->post('authenticate/shelf', ['as' => 'authenticate.shelf', 'uses' => '\IPMEDT5A\Http\Controllers\AuthenticateController@authenticateShelf']);
});