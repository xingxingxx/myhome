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

Route::group(['middleware' => 'auth'], function () {
    Route::group(['domain' => config('app.domain.home')], function () {
        Route::get('/', 'IndexController@index');
        Route::get('create', 'IndexController@create')->name('create');
        Route::post('store', 'IndexController@store')->name('store');
        Route::get('edit/{id}', 'IndexController@edit')->name('edit');
        Route::put('update/{id}', 'IndexController@update')->name('update');
        Route::get('delete/{id}', 'IndexController@delete')->name('delete');

        Route::post('import', 'IndexController@import')->name('import');
        Route::get('import-view', 'IndexController@importView')->name('importView');
    });

    Route::group(['domain' => config('app.domain.pwd')], function () {
        Route::get('/', 'PasswordController@edit');
        Route::put('update/{id}', 'PasswordController@update')->name('password.update');
    });
});


