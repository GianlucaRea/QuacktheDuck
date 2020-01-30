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

Route::apiResource('users','UtenteController');
Route::apiResource('admins','AdminController');
Route::apiResource('contents','ContentController');
Route::apiResource('documents','DocumentController');
Route::apiResource('reviews','ReviewController');
Route::apiResource('statistics','StatisticController');
Route::apiResource('tags','TagController');
Route::apiResource('versions','VersionController');







