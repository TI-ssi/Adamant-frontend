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


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::get('/logout', ['uses' => 'LoginController@logout']);
Route::get('/login', ['uses' => 'LoginController@loginScreen']);
Route::post('/login', ['uses' => 'LoginController@login']);
Route::get('/register', ['uses' => 'LoginController@registerScreen']);
Route::post('/register', ['uses' => 'LoginController@register']);

Route::get('/dashboard', ['uses' => 'ContentController@dashboard'])->middleware('auth.api');



Route::get('/admin', ['uses' => 'AdminController@index'])->middleware('auth.api', 'hasRole:admin');


Route::get('/{lang}', ['uses' => 'ContentController@setLang'])->where('lang', 'en|fr');

Route::post('/contact', ['uses' => 'ContactController@send']);;

Route::get('/{slug}', ['uses' => 'ContentController@index']);
Route::get('/', ['uses' => 'ContentController@index']);
