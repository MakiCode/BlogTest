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

Route::get('/', 'BlogPostController@index', ["as" => 'index'] );
Route::get('{}', 'BlogPostController@show', ["as" => 'show']);
Route::group(['middleware' => ['auth', 'role:editor']], function() {
    Route::get('/create', 'BlogPostController@create', ["as" => 'create']);
    Route::post('/', 'BlogPostController@store', ["as" => 'store']);
    Route::get('{}/edit', 'BlogPostController@edit', ["as" => 'edit']);
    Route::put('{}', 'BlogPostController@update', ["as" => 'update']);
    Route::patch('{}', 'BlogPostController@update', ["as" => '']);
    Route::delete('{}', 'BlogPostController@destroy', ["as" => 'destroy']);
});



Route::group(['prefix' => 'user'], function() {
    Route::get('create', 'UserController@create', ["as" => 'user.create']);
    Route::post('/', 'UserController@store', ["as" => 'user.store']);
    Route::get('{user}', 'UserController@show', ["as" => 'user.show']);
    Route::get('{user}/edit', 'UserController@edit', ["as" => 'user.edit']);
    Route::put('{user}', 'UserController@update', ["as" => 'user.update']);
    Route::patch('{user}', 'UserController@update', ["as" => '']);
    Route::delete('{user}', 'UserController@destroy', ["as" => 'user.destroy']);
});