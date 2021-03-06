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

// Default route after sign in or sign up
Route::get('home', 'TaskController@index');
Route::get('/', 'TaskController@index');

// Task manager routes
Route::get('/tasks', 'TaskController@all');
Route::post('/tasks/add', 'TaskController@add');
Route::delete('/tasks/{task}', 'TaskController@remove');

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
