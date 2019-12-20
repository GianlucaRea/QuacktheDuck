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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('user','Utente\Utente');
Route::apiResource('admin','Admin\Admin');
Route::apiResource('content','Content\Content');
Route::apiResource('document','Document\Document');
Route::apiResource('list','Lista\Lista');
Route::apiResource('review','Review\Review');
Route::apiResource('statistic','Statistic\Statistic');
Route::apiResource('tag','Tag\Tag');
Route::apiResource('version','Version\Version');

