<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'WelcomeController@index');





Route::get('/dashboard', 'AdminController@index');
Route::get('/new-post', 'PostController@new_post');
Route::get('/manage-post', 'PostController@manage_post');
Route::get('/new-category', 'CategoryController@new_category');
Route::get('/manage-category', 'CategoryController@manage_category');
Route::get('/manage-members', 'AdminController@manage_members');

Route::post('/add-new-category', 'CategoryController@add_new_category');
Route::get('/publish-category/{id}', 'CategoryController@publish_category');
Route::get('/unpublish-category/{id}', 'CategoryController@unpublish_category');
Route::get('/edit-category/{id}', 'CategoryController@edit_category');
Route::post('/update-category', 'CategoryController@update_category');

Route::post('/add-new-post', 'PostController@add_new_post');
Route::get('/unpublish-post/{id}', 'PostController@unpublish_post');
Route::get('/publish-post/{id}', 'PostController@publish_post');
Route::get('/edit-post/{id}', 'PostController@edit_post');
Route::Post('/update-post', 'PostController@update_post');

Route::post('/search', 'SearchController@view_search');

Route::get('/category/{id}', 'SearchController@search_by_category');

Route::get('/view-post/{id}', 'WelcomeController@view_post');

Route::post('/add-comment', 'WelcomeController@add_comment');

/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index');
