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
    Route::get('/xe-ads/visited', 'XeAdsController@visited')->name('home');
    Route::resource('xe-ads', 'XeAdsController');
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
    Route::get('/xe-ads/visited/getdata', 'XeAdsController@getVisitedColumnData')->name('shop.visited.getdata');
});