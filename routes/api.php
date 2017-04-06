<?php

use Illuminate\Http\Request;
use ipmedt5c\Events\BuyButtonEvent;
use Vinkla\Pusher\Facades\Pusher;
use \ipmedt5c\Events\ScanGameEvent;

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
        $api->resource('age_range', \ipmedt5c\Http\Controllers\AgeRangeController::class, $except);
        $api->resource('product',    \ipmedt5c\Http\Controllers\ProductController::class);

        $api->resource('game',    \ipmedt5c\Http\Controllers\GameController::class, $except);
        $api->resource('genre',    \ipmedt5c\Http\Controllers\GenreController::class, $except);
        $api->resource('platform',    \ipmedt5c\Http\Controllers\PlatformController::class, $except);
        $api->resource('publisher',    \ipmedt5c\Http\Controllers\PublisherController::class, $except);
        $api->resource('video',    \ipmedt5c\Http\Controllers\VideoController::class, $except);

        $api->put('product/{id}/{tag_id}', ['as' => 'products', 'uses' => '\ipmedt5c\Http\Controllers\ProductController@edit']);

    });

    $api->get('statistics', ['as' => 'statistics', 'uses' => '\ipmedt5c\Http\Controllers\StatisticController@general']);
    $api->get('statistics/platforms', ['as' => 'statistics.platforms', 'uses' => '\ipmedt5c\Http\Controllers\PlatformController@platformsStatistics']);
    $api->get('statistics/platform/{id}', ['as' => 'statistics.platform', 'uses' => '\ipmedt5c\Http\Controllers\PlatformController@platformStatistics']);
    $api->get('statistics/products', ['as' => 'statistics.products', 'uses' => '\ipmedt5c\Http\Controllers\ProductController@productsStatistics']);
    $api->get('statistics/product/{id}', ['as' => 'statistics.product', 'uses' => '\ipmedt5c\Http\Controllers\ProductController@productStatistics']);
    $api->get('statistics/games', ['as' => 'statistics.games', 'uses' => '\ipmedt5c\Http\Controllers\GameController@gamesStatistics']);
    $api->get('statistics/game/{id}', ['as' => 'statistics.game', 'uses' => '\ipmedt5c\Http\Controllers\GameController@gameStatistics']);

    $api->get('rfid/{uid}', function($uid) {
        event(new ScanGameEvent($uid));
    });

    //koop button event
    $api->get('buy/{game_id}', function ($game_id) {
        event(new BuyButtonEvent($game_id));
    });

    // Authenticate
    $api->post('authenticate',              ['as' => 'authenticate.user',  'uses' => '\ipmedt5c\Http\Controllers\AuthenticateController@authenticate']);
    $api->post('authenticate/checkuser',    ['as' => 'authenticate.checkuser',  'uses' => '\ipmedt5c\Http\Controllers\AuthenticateController@authenticateCheck']);
});
