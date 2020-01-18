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

Route::get('users','UtenteController@getID');
Route::get('users','UtenteController@getName');
Route::get('users','UtenteController@getSurname');
Route::get('users','UtenteController@getEmail');
Route::get('users','UtenteController@getUniversity');
Route::get('users','UtenteController@getCourse');
Route::get('users','UtenteController@getAvailablePoints');
Route::get('users','UtenteController@buyDoc');
Route::get('users','UtenteController@viewDoc');
Route::get('users','UtenteController@searchDoc');
Route::get('users','UtenteController@feedDoc');
Route::get('users','UtenteController@setPrefDoc');
Route::get('users','UtenteController@delPrefDoc');
Route::get('users','UtenteController@setNotifyDoc');
Route::get('users','UtenteController@delNotifyDoc');
Route::get('users','UtenteController@reportDoc');

Route::get('statistics','StatisticController@getSingleDockReview');
Route::get('statistics','StatisticController@getTotalReview');
Route::get('statistics','StatisticController@getNumberUploadedDoc');
Route::get('statistics','StatisticController@getAvarageReviewSingleDoc');
Route::get('statistics','StatisticController@getTotalAvarageReview');
Route::get('statistics','StatisticController@getClassificationPosition');

Route::get('reviews','ReviewController@getReviewID');
Route::get('reviews','ReviewController@getStarNumber');
Route::get('reviews','ReviewController@getDataReview');

Route::get('documents','DocumentController@getDocID');
Route::get('documents','DocumentController@getTitle');
Route::get('documents','DocumentController@getData');
Route::get('documents','DocumentController@getSource');
Route::get('documents','DocumentController@getUniversity');
Route::get('documents','DocumentController@getCourse');
Route::get('documents','DocumentController@getSubject');
Route::get('documents','DocumentController@getVersion');
Route::get('documents','DocumentController@getNumberOfReporting');

Route::get('tags','TagController@getTagID');

Route::get('admins','AdminController@getApprovateDoc');
Route::get('admins','AdminController@getDeleteDoc');
Route::get('admins','AdminController@getID');
Route::get('admins','AdminController@getName');
Route::get('admins','AdminController@getSurname');
Route::get('admins','AdminController@getEmail');






