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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'product'], function () {

    Route::get('index', 'ProductController@index')->name('indexProduct');
    Route::get('show', 'ProductController@show')->name('showProduct');
    Route::get('destroy/{id}', 'ProductController@destroy')->name('destroyProduct');

    Route::get('create', 'ProductController@create')->name('createProduct');
    Route::post('store', 'ProductController@store')->name('storeProduct');

    Route::get('edit', 'ProductController@edit')->name('editProduct');
    Route::post('update', 'ProductController@update')->name('updateProduct');

});

Route::group(['prefix' => 'category'], function () {
    
    Route::get('index', 'CategoryController@index')->name('indexCategory');
    Route::get('show', 'CategoryController@show')->name('showCategory');
    Route::get('destroy', 'CategoryController@destroy')->name('destroyCategory');

    Route::get('create', 'CategoryController@create')->name('createCategory');
    Route::post('store', 'CategoryController@store')->name('storeCategory');

    Route::get('edit', 'CategoryController@edit')->name('editCategory');
    Route::post('update', 'CategoryController@update')->name('updateCategory');

});

Route::group(['prefix' => 'contact'], function () {
    
    Route::get('index', 'ContactController@index')->name('indexContact');
    Route::get('show', 'ContactController@show')->name('showContact');
    Route::get('destroy', 'ContactController@destroy')->name('destroyContact');

    Route::get('create', 'ContactController@create')->name('createContact');
    Route::post('store', 'ContactController@store')->name('storeContact');

    Route::get('edit', 'ContactController@edit')->name('editContact');
    Route::post('update', 'ContactController@update')->name('updateContact');
    
});