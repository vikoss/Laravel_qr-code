<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| FUEL STATION Routes
|--------------------------------------------------------------------------
|
| Here is where you can register STATION routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "station" middleware group. Enjoy building your STATION!
|
*/


Route::get('prueba', 'FuelStationController@prueba')->name('prueba');

Route::group(['prefix' => 'fuel_station', 'middleware' => 'jwt.auth'], function ($router) {
    
    Route::get('get_vehicle/{uuid}', 'FuelStationController@getVehicle')->name('get_vehicle');
    Route::get('get_vehicles', 'FuelStationController@getVehicles')->name('get_vehicles');
    Route::get('get_dependencies', 'FuelStationController@getDependencies')->name('get_dependencies');
    Route::get('get_all_dependencies', 'FuelStationController@getAllDependencies')->name('get_all_dependencies');
    Route::post('save_refill', 'FuelStationController@saveRefill')->name('save_refill');
    Route::post('get_bitacora', 'FuelStationController@getBitacora')->name('get_bitacora');
    Route::post('get_report', 'FuelStationController@getReport')->name('get_report');

    // Ruta para generar los codigos qr de cada vehiculo
    Route::post('get_qr_codes', 'FuelStationController@getQrOfVehicles')->name('get_qr_codes');

});