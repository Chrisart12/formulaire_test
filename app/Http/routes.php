<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AccueilController@index');
Route::get('presentation', 'AccueilController@presentation');
Route::get('conseils', 'AccueilController@conseils');
Route::get('courtage', 'AccueilController@courtage');
Route::get('accompagnement', 'AccueilController@accompagnement');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');





