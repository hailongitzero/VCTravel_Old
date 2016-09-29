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
Route::group(['middleware' => ['web']], function () {
    //
});
/* Index page route*/
Route::get('', 'IndexController@index');

/* About us page route*/
Route::get('pages/{id}', 'PagesController@getPagesRedirect');


/* Tour list page route*/
Route::get('tours', 'TourController@getTourList');

/* Tour group list page route*/
Route::get('tours/{id}', 'TourController@getTourListByGroup');

/* Tour detail page route*/
Route::get('tour-detail/{id}', 'TourController@getTourDetail');

/* News List */
Route::get('news', 'NewsController@getNewsList');

/* News Group List */
Route::get('news/{id}', 'NewsController@getNewsListGroup');

/* News Detail */
Route::get('news-detail/{id}', 'NewsController@getNewsDetail');

/* Guide List */
Route::get('guide', 'GuideController@getGuideList');

/* Guide List */
Route::get('guide-detail/{id}', 'GuideController@getGuideDetail');

/* Subscribe Email */
Route::post('/subsEmail', 'IndexController@regSubscribeEmail')->middleware('email');

/* Tour booking */
Route::post('tourBooking', 'TourController@tourBooking')->middleware('booking');

/* Tour review */
Route::post('tourReview', 'TourController@tourReview')->middleware('review');
