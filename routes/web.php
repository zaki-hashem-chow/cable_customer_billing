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

//Page Routs
Route::group(['middleware' => 'auth'], function () {
    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);

    Route::resource('user', 'UserController');
    Route::post('user/search', ['as' => 'user-search', 'uses' => 'UserController@search']);
    Route::post('user/filter', ['as' => 'user-filter', 'uses' => 'UserController@filter']);

    Route::resource('company', 'CompanyController');
    Route::resource('services', 'ServicesController');
    Route::resource('customer-services', 'CustomerServicesController');
    Route::resource('payments', 'PaymentsController');
    Route::resource('reports', 'ReportsController');
});




