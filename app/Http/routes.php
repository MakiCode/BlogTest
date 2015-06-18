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

Route::get('/', 'BlogPostController@index', ["as" => 'index']);
Route::get('{id}', 'BlogPostController@show', ["as" => 'show']);
Route::group(['middleware' => ['auth', 'role:editor']], function () {
    Route::get('/create', 'BlogPostController@create', ["as" => 'create']);
    Route::post('/', 'BlogPostController@store', ["as" => 'store']);
    Route::get('{id}/edit', 'BlogPostController@edit', ["as" => 'edit']);
    Route::put('{id}', 'BlogPostController@update', ["as" => 'update']);
    Route::patch('{id}', 'BlogPostController@update', ["as" => '']);
    Route::delete('{id}', 'BlogPostController@destroy', ["as" => 'destroy']);
});


Route::get('user/{id}', 'UserController@show', ["as" => 'user.show']);

Route::group(['prefix' => 'home'], function () {
    Route::get('/', 'UserController@show', ["as" => 'me.show']);
    Route::get('/edit', 'UserController@edit', ["as" => 'me.edit']);
    Route::put('/', 'UserController@update', ["as" => 'me.update']);
    Route::patch('/', 'UserController@update', ["as" => 'me.update']);
    Route::delete('/', 'UserController@delete', ["as" => 'me.delete']);
});

//All the following was copy-pasted from the laravel docs
//http://laravel.com/docs/5.1/authentication

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
