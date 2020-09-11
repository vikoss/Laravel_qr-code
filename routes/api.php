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

    Route::get('get_list', 'NicolasRomeroController@getList')->name('index');

    //Route::get('update_excel', 'HomeController@importExportView')->name('importView');
    Route::post('upload_excel', 'NicolasRomeroController@importExcel')->name('import');

    Route::get('ver/{uuid}/{type}', 'HomeController@show')->name('show');

    Route::get('pdf/{uuid}/{type}', 'HomeController@pdf')->name('pdf');

    Route::get('delete/{tax}', 'HomeController@delete')->name('delete.tax');

});



/*
Route::get('/', 'HomeController@index')->name('index');
Route::get('/gelAll', 'HomeController@gelAll')->name('gelAll');
*/
/*******************      rutas prueba importar y exportar EXCEL   *******************/
/*
Route::get('export', 'HomeController@export')->name('export');
Route::get('importar-excel', 'HomeController@importExportView')->name('importView');
Route::post('import', 'HomeController@import')->name('import');
*/
/*************************************************************************************/
/*
Route::get('ver/{uuid}/{type}', 'HomeController@show')->name('show');

Route::get('pdf/{uuid}/{type}', 'HomeController@pdf')->name('pdf');

Route::get('delete/{tax}', 'HomeController@delete')->name('delete.tax');
*/

/***************************       Prueba pra la vista   ************//*
Route::get('pdf', 'HomeController@pdfview')->name('pdfview');
*/