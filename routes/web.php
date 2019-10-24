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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/Message', 'HomeController@Message');

Route::get('/messageall', 'HomeController@messageall');

Route::get('/addmessage', 'HomeController@addmessage');

Route::get('/edit/{id}', 'HomeController@edit');

Route::get('/delete/{id}', 'HomeController@delete');

Route::post('/submitmessage', 'HomeController@submitmessage');

Route::post('/updatemessage', 'HomeController@updatemessage');


