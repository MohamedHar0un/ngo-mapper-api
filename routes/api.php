<?php

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

Route::post('login', 'Api\ApiUserController@login');
Route::post('register', 'Api\ApiUserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Api\ApiUserController@details');
    Route::post('logout', 'Api\ApiUserController@logout');
    Route::post('logout/all', 'Api\ApiUserController@logoutAllDevices');
});
