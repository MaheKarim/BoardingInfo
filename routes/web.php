<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin/dashboard', 'AdminController@index')->name('admin.home');
    Route::get('/user/dashboard', 'UserController@index')->name('user.home');


    Route::get('/all/users_data', 'AdminController@show_data')->name('admin.all_data');
    Route::get('/users_data/{id}', 'AdminController@edit_data')->name('admin.edit_data');
    Route::post('/users-data-update/{id}', 'AdminController@update_data')->name('admin.update_data');



Route::middleware(['role:user'])->group(function () {

    Route::get('user/data-send', 'UserDataController@create')->name('user.dataSend');
    Route::post('user/data-store', 'UserDataController@store')->name('user.dataStore');
});


// API Enable
Route::prefix('api')->group(function () {
    // Get All The Category
    Route::get('/category', 'CategoryController@index')->name('admin.category');
});
