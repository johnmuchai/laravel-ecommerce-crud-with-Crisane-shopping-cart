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


Route::group(['middleware' => ['web']] ,function(){

            Route::get('/', function () {
            return view('welcome');
            });

            Auth::routes();
            Route::prefix('manage')->group(function(){
                Route::get('/', 'ManageController@index');
                Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
                Route::resource('/users', 'UsersController');
                Route::resource('/suzuki','NduthiController');
            });

           
            Route::get('/home', 'PagesController@getIndex')->name('home');
            Route::get('blog/{slug}', ['as' => 'blog.single','uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
            Route::resource('/cart', 'CartController');

});