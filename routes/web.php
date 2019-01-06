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

Route::get('/', 'User\IndexController@index');
Route::get('/author', 'AuthorProfileController@index');
Route::get('catwise/{id}', 'User\CategorySessionController@index');


Route::group(['middleware' => 'auth'], function () {


//======= Admin ========
Route::get('/admin', 'Admin\MainControler@index');


//======= Post Category ========
    Route::get('postcat/list', 'Admin\Post\PostCategoryController@index');
    Route::post('postcat/list/save', 'Admin\Post\PostCategoryController@save');
    Route::post('postcat/list/edit', 'Admin\Post\PostCategoryController@edit');
    Route::get('postcat/list/del/{id}', 'Admin\Post\PostCategoryController@del');
//======= Post Category ========

//======= Post ========
    Route::get('post/list', 'Admin\Post\PostController@index');
    Route::post('post/list/save', 'Admin\Post\PostController@save');
    Route::post('post/list/edit', 'Admin\Post\PostController@edit');
    Route::get('post/list/del/{id}', 'Admin\Post\PostController@del');
//======= Post ========

//======= Admin ========

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
