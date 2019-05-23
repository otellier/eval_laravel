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

Route::get('/', 'TopicController@index')->name('home');

Route::post('/commentaire', 'TopicController@comment')->name('commentaire');

Route::get('/recherche', 'TopicController@search')->name('recherche');

Route::resource('topics', 'TopicController')->except([
    'index'
]);