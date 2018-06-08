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
    Route::get('/', 'BookMarkController@index')->name('index');
    Route::group(['prefix' => 'bookmark'], function () {
        Route::get('create', 'BookMarkController@create')->name('bookmark.create');
        Route::post('store', 'BookMarkController@store')->name('bookmark.store');
        Route::get('edit/{id}', 'BookMarkController@edit')->name('bookmark.edit');
        Route::put('update/{id}', 'BookMarkController@update')->name('bookmark.update');
        Route::get('delete/{id}', 'BookMarkController@delete')->name('bookmark.delete');
        Route::get('query','BookMarkController@query')->name('bookmark.query');

        Route::post('import', 'BookMarkController@import')->name('bookmark.import');
        Route::get('import-view', 'BookMarkController@importView')->name('bookmark.importView');
    });

    Route::group(['prefix' => 'password'], function () {
        Route::get('/', 'PasswordController@index')->name('password.index');
        Route::get('edit/{id}', 'PasswordController@edit')->name('password.edit');
        Route::put('update/{id}', 'PasswordController@update')->name('password.update');
    });

    Route::group(['prefix' => 'note'], function () {
        Route::get('/', 'PasswordController@index')->name('note.index');
    });

    Route::group(['prefix' => 'book'], function () {
        Route::get('/', 'BookController@index')->name('book.index');
        Route::get('show/{id}', 'BookController@show')->name('book.show');
    });
});


