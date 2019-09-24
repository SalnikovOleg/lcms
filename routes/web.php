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
Route::group(['prefix'=>App\Http\Middleware\LocaleMiddleware::getLocale()], function() {

    Route::get('/', 'MainController@index');
    
    Route::get('articles/{url}', 'ArticlesController@index')->name('articles');
    
    Route::get('news/{url}', 'NewsController@index')->name('news');
    
    Route::get('{url}', function(){
    //try select md5($url) in model which store hashes and url and class and id all pages;
    //call selected object
    });
});
