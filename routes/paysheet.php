<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Paysheet Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'paysheet'], function ($router) {

    Route::post('upload', 'PaysheetController@uploadFile')->name('upload');
    //Route::get('delete_tax/{tax}', 'NicolasRomeroController@delete')->name('delete.tax');
});