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
    Route::get('contacts', 'Contacts@index');
    Route::get('articles/{url?}', 'ArticlesController@index')->name('articles');    
    Route::get('news/{url}', 'NewsController@index')->name('news');
    Route::get('pages/{url}', 'PagesController@index')->name('pages');

    Route::get('country/{url}', 'CountryController@index')->name('country');
    Route::get('category/{url}', 'CategoryController@index')->name('category');
    Route::get('programm/{url}', 'ProgrammController@index')->name('programm');
    Route::get('school/{url}', 'SchoolController@index')->name('school');
    
    Route::get('test/{url}', 'TestController@index');
   
    //Routes model bind in RouteServiceProvider
	//try select md5($url) in table routes
    Route::get('{path}', function(App\Models\Tables\Routes $router){
        //call selected object
        $method = 'App\Http\Controllers\\'.$router->class.'@index';
        return app()->call($method, ['url'=>$router->url]);
    });
    
});
