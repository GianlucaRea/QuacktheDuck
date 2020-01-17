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

Route::apiResource('users','Utente');
Route::apiResource('admins','Admin');
Route::apiResource('contents','Content');
Route::apiResource('documents','Document');
Route::apiResource('reviews','Review');
Route::apiResource('statistics','Statistic');
Route::apiResource('tags','Tag');
Route::apiResource('versions','Version');

