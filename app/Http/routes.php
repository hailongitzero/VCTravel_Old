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

/* Not found page route*/
Route::get('404', 'IndexController@notFoundPage');

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
Route::post('/tourReview', 'TourController@tourReview')->middleware('review');

/* admin page */

//
//Route::get('admin/login', function (){
//    return view('admin.login');
//})->middleware('admin', 'auth');
//
//Route::POST('admin/sigIn', 'admin\UserController@login');
//
//Route::get('admin/reg', function (){
//    return view('admin.pages.register');
//});
//
//Route::POST('admin/addUser', 'admin\UserController@userRegister');

Route::get('admin', function (){
    return view('admin.pages.dashboard');
});

Route::get('admin/tour-list', 'Admin\AdminTourController@getTourList');

//Insert Tour
Route::get('admin/tour-edit', 'Admin\AdminTourController@createTour');
//Update tour
Route::get('admin/tour-edit/{id}', 'Admin\AdminTourController@getTourDetail');

Route::auth();

Route::get('/home', 'HomeController@index');

//Edit tour
Route::POST('admin/tourEditor', 'Admin\AdminTourController@tourEditor');
//Update tour
Route::POST('admin/tourUpdate', 'Admin\AdminTourController@tourUpdate');
