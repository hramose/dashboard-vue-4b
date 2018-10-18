<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('logout','HomeController@logout');

// Si estan logeados
Route::group(['middleware' => 'auth'], function () {

    /**
     * Dashboard
     */
    Route::get('/dashboard','HomeController@index');

    Route::group(['middleware' => 'role:admin'], function () {

        /**
         * Administrator
         */
        Route::get('/admin', function() {
            return "Hi! You're admin";
        });
    });
});


