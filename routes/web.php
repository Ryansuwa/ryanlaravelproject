<?php
use Illuminate\Support\Facades\Config;
/**
 * ===============start==Route for Frontend================
 */
Route::group(['namespace'=>'frontend'],function (){
    Route::any('/','ApplicationController@index')->name('index');
    Route::any('about','ApplicationController@about')->name('about');

});

/**
 * =========End==Route for Forntend=========================
 */


/**
 * =========Start===Route for Admin=====================
 */

Route::group(['namespace'=>'backend','prefix'=>Config::get('admin.name')],function(){
    Route::any('/','DashboardController@index')->name('admin');

});

Route::group(['namespace'=>'backend'],function(){
    Route::any('admin-login','AdminController@index')->name('admin-login');

});