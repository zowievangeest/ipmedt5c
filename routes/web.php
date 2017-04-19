<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\App;

// bij elke non-api request wordt index.html gereturnet

Route::get('{any}', function () {
    return File::get(public_path('index.html'));
})->where('any', '.*');