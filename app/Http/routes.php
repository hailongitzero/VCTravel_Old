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
/* Index page route*/
Route::get('/', 'IndexController@index');

/* About us page route*/
Route::get('about', function () {
    return view('about');
});

/* Tour page route*/
Route::get('tour', function () {
    return view('tour');
});

/* News page route*/
Route::get('news', function () {
    return view('news');
});

/* Services page route*/
Route::get('services', function () {
    return view('services');
});

/* Hotel page route*/
Route::get('hotel', function () {
    return view('hotel');
});

/* Restaurant page route*/
Route::get('restaurant', function () {
    return view('restaurant');
});

/* Contact page route*/
Route::get('contact', function () {
    return view('contact');
});

/* Payment page route*/
Route::get('payment', function () {
    return view('payment');
});