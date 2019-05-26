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


Route::group(['prefix' => 'kursais'], function(){
    Route::get('', 'KursaiController@index')->name('kursai.index');
    Route::get('create', 'KursaiController@create')->name('kursai.create');
    Route::post('store', 'KursaiController@store')->name('kursai.store');
    Route::get('edit/{kursai}', 'KursaiController@edit')->name('kursai.edit');
    Route::post('update/{kursai}', 'KursaiController@update')->name('kursai.update');
    Route::post('/delete/{kursai}', 'KursaiController@destroy')->name('kursai.destroy');
    Route::get('show/{kursai}', 'KursaiController@show')->name('kursai.show');
 });


 Route::group(['prefix' => 'grupes'], function(){
    Route::get('', 'GrupeController@index')->name('grupe.index');
    Route::get('create', 'GrupeController@create')->name('grupe.create');
    Route::post('store', 'GrupeController@store')->name('grupe.store');
    Route::get('edit/{grupe}', 'GrupeController@edit')->name('grupe.edit');
    Route::post('update/{grupe}', 'GrupeController@update')->name('grupe.update');
    Route::post('/delete/{grupe}', 'GrupeController@destroy')->name('grupe.destroy');
    Route::get('show/{grupe}', 'GrupeController@show')->name('grupe.show');
 });

 Route::group(['prefix' => 'paskaitos'], function(){
    Route::get('', 'PaskaitoController@index')->name('paskaito.index');
    Route::get('create', 'PaskaitoController@create')->name('paskaito.create');
    Route::post('store', 'PaskaitoController@store')->name('paskaito.store');
    Route::get('edit/{paskaito}', 'PaskaitoController@edit')->name('paskaito.edit');
    Route::post('/update/{paskaito}', 'PaskaitoController@update')->name('paskaito.update');
    Route::post('/delete/{paskaito}', 'PaskaitoController@destroy')->name('paskaito.destroy');
    Route::get('show/{paskaito}', 'PaskaitoController@show')->name('paskaito.show');
 });

 

 Route::group(['prefix' => 'failais'], function(){
    Route::get('', 'FailaiController@index')->name('failai.index');
    Route::get('create', 'FailaiController@create')->name('failai.create');
    Route::post('store', 'FailaiController@store')->name('failai.store');
    Route::get('edit/{failai}', 'FailaiController@edit')->name('failai.edit');
    
    Route::get('/download/{failai}', 'FailaiController@download')->name('failai.download');

    Route::post('update/{failai}', 'FailaiController@update')->name('failai.update');
    Route::post('/delete/{failai}', 'FailaiController@destroy')->name('failai.destroy');
    Route::get('show/{failai}', 'FailaiController@show')->name('failai.show');
 });

 Route::group(['prefix' => 'users'], function(){
   Route::get('', 'UserController@index')->name('user.index');
   Route::get('create', 'UserController@create')->name('user.create');
   Route::post('store', 'UserController@store')->name('user.store');
   Route::get('edit/{user}', 'UserController@edit')->name('user.edit');
   Route::post('update/{user}', 'UserController@update')->name('user.update');
   Route::post('/delete/{user}', 'UserController@destroy')->name('user.destroy');
   Route::get('show/{user}', 'UserController@show')->name('user.show');
});
