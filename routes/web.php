<?php

use Illuminate\Support\Facades\Route;
use App\Http\Conttrollers;

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

Route::get('/','MainController@show_home_page')->name('home');
Route::get('/auth','MainController@show_login_room')->name('login');
Route::post('/auth','MainController@show_login_page_or_signin_automaticly')->name('login');
Route::get('/userroom','MainController@show_user_room')->name('userroom');
//Route::get('/login','MainController@show_login_room')->name('login');
Route::get('/reg','MainController@show_registration_room')->name('registration');
Route::post('/reg','MainController@registrate_user_and_return_him_to_home_page')->name('registration');
Route::get('/prices','MainController@show_price_page')->name('price');
Route::get('/rent_pc','MainController@show_rent_page')->name('rent');
Route::post('/rent_pc','MainController@recive_data_and_insert_into_db')->name('rent');
Route::get('/contact','MainController@return_google_map_with_data_location_of_club')->name('contact');
Route::get('/club','MainController@return_club_page')->name('club');
//send mail
Route::get('/send',"mailController@send")->name('home');

