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
  })->name('welcome');


Auth::routes();
Route::get('/categories', 'CategoryController@index')->name('categories.index');

Route::group(['middleware'=>['admin'], 'prefix'=>'admin'],function(){
Route::get('/', 'AdminController@admin')->middleware('admin')->name('admin');
Route::get('/categories', 'CategoryController@adminIndex')->name('admin.categoriesList');
});
Route::get('/category/create', "CategoryController@create")->name('admin.category.create'); // sukurimas
Route::post('/category/Store', "CategoryController@store")->name('admin.category.store'); // sukurimas
Route::delete('/category/{category}','CategoryController@destroy')->name('admin.category.delete'); //istrinam



Route::get('/home', 'HomeController@index')->name('home');
