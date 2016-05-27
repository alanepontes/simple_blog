<?php


use App\Post;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
postsIt's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostController@index');
Route::get('/posts', 'PostController@index');
Route::post('/post', 'PostController@store');
Route::delete('/post/{post}', 'PostController@destroy');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::auth();

Route::get('/home', 'HomeController@index');




