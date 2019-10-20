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
Route::get('/','FrontEndController@index');
Route::get('/index','FrontEndController@index');


Route::get('gallery','FrontEndController@image');
//Route::post('gallery','FrontEndController@image');
Route::get('categories/{id}','FrontEndController@show');
Route::post('categories/{id}','FrontEndController@store');

Route::get('register','ManageController@register');
Route::post('register','ManageController@store');

Route::get('login','LoginController@create');
Route::post('login','LoginController@login');
Route::get('logout','LoginController@logout');
Route::get('user/{id}','FrontEndController@user');
Route::get('/admin','FrontEndController@admin');
Route::get('/admin/users','FrontEndController@manageUser');
Route::get('/admin/users/{id}','FrontEndController@deleteUser');
Route::get('/admin/posts','ManageController@createPosts');
Route::post('/admin/posts','ManageController@insertPost');
Route::get('admin/posts/{id}','ManageController@deletePost');
Route::get('admin/activity','FrontEndController@activity');
Route::get('/about','FrontEndController@about');
Route::get('/author','FrontEndController@author');

//Route::get('gallery/{category?}','FrontEndController@filter');




//Route::get('/','Sort@Sorting');
//Route::get('{name}','FilteringController@getCategory');
