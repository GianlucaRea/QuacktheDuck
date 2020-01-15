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

Route::apiResource('users','Utente\Utente');
Route::apiResource('admins','Admin\Admin');
Route::apiResource('contents','Content\Content');
Route::apiResource('documents','Document\Document');
Route::apiResource('reviews','Review\Review');
Route::apiResource('statistics','Statistic\Statistic');
Route::apiResource('tags','Tag\Tag');
Route::apiResource('versions','Version\Version');

