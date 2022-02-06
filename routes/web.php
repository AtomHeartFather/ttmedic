<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\MainController@home');

Route::get('/articles', 'App\Http\Controllers\MainController@articles');

Route::get('/articles/{article_id}', 'App\Http\Controllers\MainController@article');

Route::post('/article/like', 'App\Http\Controllers\MainController@like');

Route::post('/article/comment', 'App\Http\Controllers\MainController@comment');