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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
   return 'home';
});
//Content
Route::get('/contents', 'ContentController@index');
Route::get('/contents/create',['middleware' => 'auth', 'uses'=>'ContentController@create']);
Route::get('/contents/{id}','ContentController@show');
Route::get('/contents/{id}/edit',['middleware' => 'auth', 'uses'=>'ContentController@edit']);
Route::post('/contents/store',['middleware' => 'auth', 'uses' => 'ContentController@store']);
Route::delete('/contents/{id}/delete',['middleware' => 'auth','uses'=>'ContentController@destroy']);
Route::put('/contents/{id}/update',['middleware' => 'auth', 'uses'=>'ContentController@update']);

//Picture
Route::get('/pictures/create',['middleware' => 'auth', 'uses' => 'PictureController@create']);
Route::get('/pictures/{file_hashed_name}', ['uses'=>'PictureController@show']);
Route::post('pictures/store',['middleware' => 'auth', 'uses' => 'PictureController@store']);





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