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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'HomeController@home')->name('index');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

 Route::group(['prefix' => 'News' , 'as' => 'news.','middleware' => ['auth']], function () {
	Route::get('/show', 'NewsController@index')->name('show');
	Route::get('/add', 'NewsController@create')->name('add');
	Route::post('/store', 'NewsController@store')->name('store');
	Route::get('/edit/{id}', 'NewsController@edit')->name('edit');
	Route::post('/update/{id}', 'NewsController@update')->name('update');
    });
Route::group(['prefix' => 'Predict' , 'as' => 'predict.','middleware' => ['auth']], function () {
//	Route::get('/show', 'PredictionController@index')->name('show');
	Route::get('/add', 'PredictionController@create')->name('add');
	Route::post('/store', 'PredictionController@store')->name('store');
//	Route::get('/edit/{id}', 'PredictionController@edit')->name('edit');
//	Route::post('/update/{id}', 'PredictionController@update')->name('update');

	Route::get('/train', 'PredictionController@trainData')->name('train');
	Route::get('/predictnews', 'PredictionController@predict')->name('predictnews');
});

Route::group(['prefix' => 'User' , 'as' => 'user.','middleware' => ['auth']], function () {
	Route::get('/show', 'UserController@index')->name('show');
});
