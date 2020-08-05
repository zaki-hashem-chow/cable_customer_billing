<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


// Authentication Routs
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::post('user/search', ['as' => 'user-search', 'uses' => 'UserController@search']);
    Route::post('user/filter', ['as' => 'user-filter', 'uses' => 'UserController@filter']);
    Route::resource('user', 'UserController');

    Route::get('company', ['as' => 'company', 'uses' => 'CompanyController@index']);
    Route::resource('services', 'ServicesController');
    Route::get('customer-services', ['as' =>'customer-services', 'uses' => 'CustomerServicesController@index']);
    Route::get('payments', ['as' => 'payments', 'uses' => 'PaymentsController@index']);
    Route::get('reports', ['as' => 'reports', 'uses' => 'ReportsController@index']);

});

Route::group(['middleware' => 'auth'], function () {
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);

});

Route::group(['middleware' => 'auth'], function () {

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
