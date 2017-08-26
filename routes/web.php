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



Route::get('/', 'PagesController@getIndex')->name('home');
Route::get('/news/{id}', 'PagesController@getNewsSingle');
Route::get('/news', 'PagesController@getNews');
Route::get('assistance', 'PagesController@getAssistance');
Route::get('adjuster', 'PagesController@getAdjuster');
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::post('/question', 'PagesController@store')->name('question.store');




Auth::routes();

Route::get("hard work yeaaaaah");
Route::post('/language', array(
	'before' => 'csrf',
	'as' => 'language-chooser',
	'uses' => 'LanguageController@changeLanguage'));

Route::post('/language-chooser', 'LanguageController@changeLanguage')->name('language-chooser');




Route::prefix('admin')->group(function(){

	Route::get('/question/create', 'QuestionsController@create')->name('question.create');
	
	Route::get('/question', 'QuestionsController@index')->name('question.index');
	Route::get('/question/{id}', 'QuestionsController@show')->name('question.show');
	Route::delete('/question/{id}', 'QuestionsController@destroy')->name('question.destroy');




	Route::resource('/news', 'NewsController');
	Route::resource('/stuff', 'StuffController');

	Route::get('/login', 'AdminLoginController@showLogin')->name('admin.login');
	Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin');
});


