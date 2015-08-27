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
| For user function like get signup form and add user record into database and retrieve user.
*/

Route::get('/', 'UsersController@index');
Route::get('/home', 'UsersController@index');
Route::post('signup', 'UsersController@createuser');
Route::get('signup', 'UsersController@getsignupform');

/*
 * Authentication routes..
 * route for auth and register
 */

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');