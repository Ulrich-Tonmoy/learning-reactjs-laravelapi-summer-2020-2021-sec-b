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

// MVC
// Route::get('/login', ['as' => 'login.index', 'uses' => 'LoginController@index']);
// Route::post('/login', 'LoginController@verify');
// Route::get('/logout', 'LogoutController@index');

// Route::group(['middleware' => ['session']], function () {
//     Route::get('/home', 'HomeController@index')->name('home.index');
//     Route::get('/user/list', 'UserController@index')->name('user.index');
//     Route::get('/user/details/{id}', 'UserController@details')->name('user.details');

//     Route::group(['middleware' => ['type']], function () {
//         Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
//         Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
//         Route::post('/user/edit/{id}', 'UserController@editUser');
//         Route::get('/user/create', 'UserController@create')->name('user.create');
//         Route::post('/user/create', 'UserController@createUser');
//     });
// });


// API
Route::get('/user', 'ApiController@user');
Route::post('/user/create', 'ApiController@create');
Route::get('/user/edit/{id}', 'ApiController@edit')->name('user.edit');
Route::post('/user/edit/{id}', 'ApiController@editUser');
Route::get('/user/delete/{id}', 'ApiController@delete')->name('user.delete');
