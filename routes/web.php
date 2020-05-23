<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@index')->name('index');

/*******************      rutas prueba importar y exportar EXCEL   *******************/

Route::get('export', 'HomeController@export')->name('export');
Route::get('importar-excel', 'HomeController@importExportView')->name('importView');
Route::post('import', 'HomeController@import')->name('import');

/*************************************************************************************/

Route::get('ver/{uuid}/{type}', 'HomeController@show')->name('show');

Route::get('pdf/{uuid}/{type}', 'HomeController@pdf')->name('pdf');

Route::get('delete/{tax}', 'HomeController@delete')->name('delete.tax');


/***************************       Prueba pra la vista   ************/
Route::get('pdf', 'HomeController@pdfview')->name('pdfview');

