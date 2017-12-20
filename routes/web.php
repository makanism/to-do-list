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
    return view('welcome');
});



Route::get('/task', "TaskController@index");
Route::get('/task/details/{task_id}', "TaskController@details");
Route::get('/task/add', "TaskController@add");
Route::post('/task/add', "TaskController@add");
Route::get('/task/edit/{task_edit}', "TaskController@edit");
Route::post('/task/edit/{task_edit}', "TaskController@edit");
Route::post('/task/delete', "TaskController@delete");


Route::get('/page_view', "PageViewController@index");
Route::get('/page_view_reset', "PageViewController@reset");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
