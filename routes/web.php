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
Route::group(['prefix'=>App\Http\Middleware\LocaleMiddleware::getLocale(),
'middleware'=>'widgets'], function() {

    Route::get('/', 'MainController@index');
    
    Route::get('articles/{url?}', 'ArticlesController@index')->name('articles');
    
    Route::get('news/{url}', 'NewsController@index')->name('news');
   // Route::get('test/{url}', 'TestController@index');
   
    Route::get('{path}', function(App\Models\Routes $router){
	    return $router->toArray();
	    //try select md5($url) in table routes
	    //call selected object
    });
    
});
