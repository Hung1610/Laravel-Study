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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('index','mainController@getTrangChu')->name('index');

Route::get('dangnhap','xuLyAuthController@getLogin')->name('login');
Route::post('dangnhap','xuLyAuthController@postLogin')->name('postlogin');

Route::get('dangky','xuLyAuthController@getRegister')->name('register');
Route::post('dangky','xuLyAuthController@postRegister')->name('postregister');

Route::get('admin', function(){
    return view('admin.layouts.app');
});
