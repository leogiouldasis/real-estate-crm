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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/xe-ads/edited', 'XeAdsController@edited')->name('home');
    Route::resource('xe-ads', 'XeAdsController');
    
});

Route::group([
    'middleware' => ['auth'],
    'namespace' => 'Statistics',
    'prefix' => 'statistics/',
    'as' => 'statistics.',
], function () {
    Route::get('/new-ads', 'NewAdsController@index')->name('new_ads');
});



/**
 * Async Routing
 */
Route::group([
    'middleware' => ['auth'],
    'namespace' => 'Async',
    'prefix' => 'async/',
    'as' => 'async.',
], function () {

    Route::get('/xe-ads/getdata', 'XeAdsController@getColumnData')->name('shop.getdata');
    Route::get('/xe-ads/edited/getdata', 'XeAdsController@getEditedColumnData')->name('shop.visited.getdata');
});