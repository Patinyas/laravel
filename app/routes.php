<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', 'userController\UsersController@new');

Route::get('/','UserController@ShowDetail');
Route::post('newuser','UserController@newUser');
#Route::post('Success','DetailRegister@showDetail');
Route::post('success','UserController@Submit');
Route::post('/','UserController@ShowDetail');
