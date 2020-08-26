<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//api for article
Route::get('articles','Api\ArticleController@index');
Route::get('articles/{id}','Api\ArticleController@show');
Route::post('articles','Api\ArticleController@store');
Route::put('articles/{id}','Api\ArticleController@update');
Route::delete('articles/{id}','Api\ArticleController@delete');
//end api for article
Route::post('register', 'Auth\RegisterController@register');
