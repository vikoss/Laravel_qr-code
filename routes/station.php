<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| STATION Routes
|--------------------------------------------------------------------------
|
| Here is where you can register STATION routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "station" middleware group. Enjoy building your STATION!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('prueba', 'FuelStationController@prueba')->name('prueba');
