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
