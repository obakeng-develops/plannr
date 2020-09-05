<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');
Route::get('/whoareyou', 'PagesController@aboutYou')->name('you');
Route::get('/budget', 'PagesController@budget')->name('budget');
Route::get('/activities', 'PagesController@activities')->name('activities');
Route::get('/guests', 'PagesController@guests')->name('guests');
Route::get('/itinerary', 'PagesController@itinerary')->name('finish');

Route::get('/plan/add', 'PlanController@addPlan')->name('add_plan');
Route::post('/user/add', 'PlanController@addPlan')->name('addUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
