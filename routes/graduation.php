<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| EVENTS (GRADUATION PHOTOS) Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('graduation_photos')->namespace('GraduationPhotos')->group(function () {
    Route::post('persons', 'PersonController@store');
    Route::post('persons/{person}/events', 'PersonEventController@store');
    Route::post('persons/{person}/invitations', 'PersonInviteController@store');
    Route::get('events/{event}', 'EventController@importExcel');
    Route::post('invitations/{invite}/relationships', 'InviteRelationshipController@store');
    Route::prefix('catalogs')->group(function () {
        Route::get('relationships', 'CatalogsController@relationships');
        Route::get('events', 'CatalogsController@events');
    });
});
