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


Route::prefix('graduation_photo')->namespace('GraduationPhotos')->group(function () {
    Route::post('persons', 'PersonController@store');
    Route::get('persons/{person}', 'PersonController@show');
    Route::post('persons/{person}/address', 'PersonAddressController@store');
    Route::post('persons/{person}/events', 'PersonEventController@store');
    Route::post('persons/{person}/invitations', 'PersonInviteController@store');
    Route::post('persons/{person}/hosts', 'PersonHostController@store');
    Route::get('events/{event}', 'EventController@show');
    Route::get('events', 'EventController@index');
    Route::post('events', 'EventController@store');
    Route::post('invitations/{invite}/relationships', 'InviteRelationshipController@store');
    Route::get('invitations/{person}/{event}/generate-url', 'InviteController@generateURL');
    Route::get('entries/{person}', 'EntryController@generate');
    Route::get('relationships', 'RelationshipController@index');
    Route::prefix('catalogs')->group(function () {
        Route::get('relationships', 'RelationshipTypesController@index');
        Route::get('events', 'CatalogsController@events');
        Route::get('zipcodes/{code}', 'CatalogsController@zipcode');
    });
});

// generate-qr-code
Route::post('graduation_photo/qrcodes/generate', 'QRCodeController@generate');
Route::post('graduation_photo/storage', 'StorageS3Controller@storage');
Route::get('graduation_photo/storage', 'StorageS3Controller@show');
