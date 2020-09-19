<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'auth'], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});


Route::group(['prefix' => 'nicolas_romero'], function ($router) {

    Route::post('upload_excel', 'NicolasRomeroController@importExcel')->name('import');
    Route::post('view_pdf', 'NicolasRomeroController@viewPDF')->name('view_pdf');
    Route::get('get_list', 'NicolasRomeroController@getList')->name('index');
    Route::get('delete_tax/{tax}', 'NicolasRomeroController@delete')->name('delete.tax');
    Route::get('ver_vigencia/{uuid}/{type}', 'NicolasRomeroController@getDetails')->name('show');

    /*
    integrar una API para busqueda de Tax's
    */
});


Route::group(['prefix' => 'fuel_station'], function ($router) {
    
    Route::get('prueba', 'FuelStationController@prueba')->name('prueba');

    Route::get('get_vehicle/{uuid}', 'FuelStationController@getVehicle')->name('get_vehicle');
    Route::post('save_refill', 'FuelStationController@saveRefill')->name('save_refill');
    Route::post('get_bitacora', 'FuelStationController@getBitacora')->name('get_bitacora');
    Route::get('get_dependencies', 'FuelStationController@getDependencies')->name('get_dependencies');

});
