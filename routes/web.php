<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('home');
Route::get('/news', 'NewsController@index');
Route::get('/news/create', 'NewsController@create')->middleware('auth:admin');
Route::get('/news/{article}', 'NewsController@show');
Route::get('/news/{article}/edit', 'NewsController@edit')->middleware('auth:admin');
Route::post('/news', 'NewsController@store')->middleware('auth:admin');
Route::patch('/news/{article}', 'NewsController@update')->middleware('auth:admin');
Route::delete('/news/{article}', 'NewsController@destroy')->middleware('auth:admin');

Route::get('/events', 'EventsController@index');
Route::get('/events/create', 'EventsController@create')->middleware('auth:admin');
Route::get('/events/{event}', 'EventsController@show');
Route::get('/events/{event}/edit', 'EventsController@edit')->middleware('auth:admin');
Route::post('/events', 'EventsController@store')->middleware('auth:admin');
Route::patch('/events/{event}', 'EventsController@update')->middleware('auth:admin');
Route::delete('/events/{event}', 'EventsController@destroy')->middleware('auth:admin');

Route::get('/find', 'LocationsController@index');
Route::get('/find/create', 'LocationsController@create')->middleware('auth:admin');
//NOT IMPLIMENTED Route::get('/locations/{location}', 'LocationsController@show');
Route::post('/find', 'LocationsController@store')->middleware('auth:admin');
Route::patch('/find/{location}', 'LocationsController@update')->middleware('auth:admin');
Route::delete('/find/{location}', 'LocationsController@destroy')->middleware('auth:admin');

Route::get('/faq', 'FaqController@index');
Route::get('/faq/create', 'FaqController@create')->middleware('auth:admin');
//NOT IMPLIMENTED Route::get('/faq/create', 'FaqController@show');
Route::post('/faq', 'FaqController@store')->middleware('auth:admin');
Route::patch('/faq/{faq}', 'FaqController@update')->middleware('auth:admin');
Route::delete('/faq/{faq}', 'FaqController@destroy')->middleware('auth:admin');

Route::get('/opening-times', 'OpeningController@index');
Route::get('/opening-times/create', 'OpeningController@create')->middleware('auth:admin');
Route::post('/opening-times', 'OpeningController@store')->middleware('auth:admin');
Route::patch('/opening-times/{system}', 'OpeningController@update')->middleware('auth:admin');
Route::delete('/opening-times/{system}', 'OpeningController@destroy')->middleware('auth:admin');

Route::get('/wargaming', 'WargamesController@index');
Route::get('/wargaming/create', 'WargamesController@create')->middleware('auth:admin');
Route::get('/wargaming/{system}', 'WargamesController@show');
Route::post('/wargaming', 'WargamesController@store')->middleware('auth:admin');
Route::patch('/wargaming/{system}', 'WargamesController@update')->middleware('auth:admin');
Route::delete('/wargaming/{system}', 'WargamesController@destroy')->middleware('auth:admin');

Route::get('/roleplaying', 'RoleplayController@index');
Route::get('/roleplaying/create', 'RoleplayController@create')->middleware('auth:admin');
Route::get('/roleplaying/{system}', 'RoleplayController@show');
Route::post('/roleplaying', 'RoleplayController@store')->middleware('auth:admin');
Route::patch('/roleplaying/{system}', 'RoleplayController@update')->middleware('auth:admin');
Route::delete('/roleplaying/{system}', 'RoleplayController@destroy')->middleware('auth:admin');

Route::get('/contact', 'ContactController@index');
Route::get('/contact/create', 'ContactController@create')->middleware('auth:admin');;
Route::post('/contact', 'ContactController@store')->middleware('auth:admin');;
Route::patch('/contact/{system}', 'ContactController@update')->middleware('auth:admin');;
Route::delete('/contact/{system}', 'ContactController@destroy')->middleware('auth:admin');;
Route::get('/terms', function () {return view('terms');});

Route::get('/search/', 'SearchController@index');
Route::get('/search/{searchTerm?}', 'SearchController@show');
Route::post('/search/', 'SearchController@redirect');

//Auth::routes();
Route::get('bunker', 'Admin\Auth\LoginController@showLoginForm')->name('admin/login');
Route::post('bunker/login', 'Admin\Auth\LoginController@login')->name('admin/login');;
Route::post('bunker/logout', 'Admin\Auth\LoginController@logout')->name('admin/logout');
//Route::get('bunker/register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin/register');
//Route::post('bunker/register', 'Admin\Auth\RegisterController@register');
