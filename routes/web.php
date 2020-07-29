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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
});

/*課題３
Route::group(['prefix' => 'xxx'], function() {
    Route::get('news/create', 'xxx\AAAController@bbb');
});

課題4
Route::group(['prefix' => 'admin'], function() {
    Route::get('profil/create', 'Admin\ProfilController@add');
    Route::gets('profil/edit', 'admin\ProfilController@edit');
});