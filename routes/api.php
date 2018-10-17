<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Login API Passport
 */
Route::post('/login','Api\AuthController@login');
Route::middleware('auth:api')->post('/logout','Api\AuthController@logout');

/**
 * Middleware Auth Apis
 */
Route::middleware('auth:api')->group(function() {

    Route::get('/roles', function() {
        return "Roles api";
    });

    Route::get('/permissions', function() {
        return "Permissions";
    });
});