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


  Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::post('login', 'Auth\LoginController@login');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');

  // Registration Routes...
  Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
  Route::post('register', 'Auth\RegisterController@register');

  // Password Reset Routes...
  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/categories', 'CategoryController@index')->name('categories.index');

Route::group(['middleware'=>['admin'], 'prefix'=>'admin'],function(){
Route::get('/', 'AdminController@admin')->middleware('admin')->name('admin');
Route::get('/categories', 'CategoryController@adminIndex')->name('admin.categoriesList');
});
Route::get('/category/create', "CategoryController@create")->name('admin.categoryCreate'); // sukurimas
Route::post('/category/Store', "CategoryController@store")->name('admin.categoryStore'); // sukurimas
Route::delete('/category/{category}','CategoryController@destroy')->name('admin.categoryDelete'); //istrinam

//subcategories list
Route::get('categories/{category}', 'SubcategoryController@index')->name('subcategories.index');
//services 
Route::get('categories/{category}/services', 'ServiceController@index')->name('services.index');

Route::get('/home', 'HomeController@index')->name('home');
