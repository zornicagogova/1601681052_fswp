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

Route::redirect('/', '/home');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/create', 'WebstoreController@createProduct')->name('createProduct');
    Route::post('/add', 'WebstoreController@addProduct')->name('addProduct');

    Route::get('/edit/{productId}', 'WebstoreController@editProduct')->name('editProduct');
    Route::post('/update', 'WebstoreController@updateProduct')->name('updateProduct');

    Route::get('/delete/{productId}', 'WebstoreController@deleteProduct')->name('deleteProduct');



    // Route-ове, свързани с количката
    Route::get('/add/{product}', 'WebstoreController@addToCart')->name('add');
    Route::get('/remove/{productId}', 'WebstoreController@removeFromCart')->name('remove');
    Route::get('/empty', 'WebstoreController@clearCart')->name('empty');

    Route::get('checkout', 'WebstoreController@checkout')->name('checkout');
    Route::get('paidSuccessfully', 'WebstoreController@paidSuccessfully')->name('paidSuccessfully');
});
