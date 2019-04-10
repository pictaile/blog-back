<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/save', function (Request $request) {
    return $request->user();
});

Route::get('articles/{id?}', 'ArticleController@getArticles');
Route::post('articles/{id}', 'ArticleController@save');
Route::get('auth', 'APILoginController@login');
