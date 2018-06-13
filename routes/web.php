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

Route::get('/', 'IndexController@index');
Route::get('/bunker', 'HomeController@index')->name('home');
Auth::routes();

//Route::get('/register', 'RegistrationController@create');
//Route::get('/login', 'SessionsController@create');


Route::get('/news', 'NewsController@index');
//Route::get('/news/create', 'NewsController@create');
Route::get('/news/{article}', 'NewsController@show');
//Route::get('/news/{article}/edit', 'NewsController@edit');
//Route::post('/news', 'NewsController@store');
//Route::patch('/news/{article}', 'NewsController@update');
//Route::delete('/news/{article}', 'NewsController@destroy');

Route::get('/events', 'EventsController@index');
//Route::get('/events/create', 'EventsController@create');
Route::get('/events/{event}','EventsController@show');
//Route::get('/events/{event}/edit','EventsController@edit');
//Route::post('/events', 'EventsController@store');
//Route::patch('/events/{event}', 'EventsController@update');
//Route::delete('/events/{event}', 'EventsController@destroy');

Route::get('/find', 'LocationsController@index');
//Route::get('/find/create', 'LocationsController@create');
//NOT IMPLIMENTED Route::get('/locations/{location}', 'LocationsController@show');
//Route::post('/find', 'LocationsController@store');
//Route::patch('/find/{location}', 'LocationsController@update');
//Route::delete('/find/{location}', 'LocationsController@destroy');

Route::get('/faq', 'FaqController@index');
//Route::get('/faq/create', 'FaqController@create');
//NOT IMPLIMENTED Route::get('/faq/create', 'FaqController@show');
//Route::post('/faq', 'FaqController@store');
//Route::patch('/faq/{faq}', 'FaqController@update');
//Route::delete('/faq/{faq}', 'FaqController@destroy');

Route::get('/opening-times', 'OpeningController@index');
//Route::get('/opening-times/create', 'OpeningController@create');
//Route::post('/opening-times', 'OpeningController@store');
//Route::patch('/opening-times/{system}', 'OpeningController@update');
//Route::delete('/opening-times/{system}', 'OpeningController@destroy');

Route::get('/wargaming', 'WargamesController@index');
//Route::get('/wargaming/{system}', 'WargamesController@show');
//Route::get('/wargaming/create', 'WargamesController@create');
//Route::post('/wargaming', 'WargamesController@store');
//Route::patch('/wargaming/{system}', 'WargamesController@update');
//Route::delete('/wargaming/{system}', 'WargamesController@destroy');

Route::get('/roleplaying', 'RoleplayController@index');
//Route::get('/roleplaying/{system}', 'RoleplayController@show');
//Route::get('/roleplaying/create', 'RoleplayController@create');
//Route::post('/roleplaying', 'RoleplayController@store');
//Route::patch('/roleplaying/{system}', 'RoleplayController@update');
//Route::delete('/roleplaying/{system}', 'RoleplayController@destroy');

Route::get('/virtual-tour', function () {
    return view('virtual-tour');
});
Route::get('/contact', 'ContactController@index');
//Route::get('/contact/create', 'ContactController@create');
//Route::post('/contact', 'ContactController@store');
//Route::patch('/contact/{system}', 'ContactController@update');
//Route::delete('/contact/{system}', 'ContactController@destroy');
