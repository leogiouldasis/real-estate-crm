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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/xe-ads', 'XeAdsController@index')->name('xe-ads');

/**
 * Async Routing
 */
Route::group([
    'namespace' => 'Async',
    'prefix' => 'async/',
    'as' => 'async.',
], function () {

    Route::get('/xe-ads/getdata', 'XeAdsController@getColumnData')->name('shop.getdata');
});