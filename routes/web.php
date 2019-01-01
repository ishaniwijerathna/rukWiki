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

Route::group(['middleware' => ['web']] , function () {

    //Authentication  Routes
    //Route::get('auth/login','Auth\LoginController@getlogin');
    //Route::post('auth/login','Auth\LoginController@postlogin');
    //Route::post('auth/logout','Auth\LoginController@getlogout');

    //registration routes
    //Route::get('auth/register','Auth\AuthController@getRegister');
    //Route::post('auth/register','Auth\AuthController@postRegister');

    //categories
 Route::resource('categories','CategoryController',['except'=> ['create']]);   



Route::get('/blog/{slug}', ['as'=> 'blog.single', 'uses' => 'WikiController@getSingle']) 
->where('slug' , '[\w\d\-\_]+');
Route::get('blog', ['uses' => 'WikiController@getIndex', 'as' => 'blog.index']);
Route::get('/contact', 'blogController@getcontact');
Route::get('/about', 'blogController@getabout');
Route::get('/', 'blogController@getindex');



Route::resource('posts', 'PostsController');
});




