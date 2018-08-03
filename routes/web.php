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

Route::get('','mainController@getTrangChu')->name('index');
Route::get('admin','mainController@getAdmin')->name('admin');

Route::get('dangnhap','xuLyAuthController@getLogin')->name('login');
Route::post('dangnhap','xuLyAuthController@postLogin')->name('postlogin');
Route::get('dangxuat','xuLyAuthController@logout')->name('logout');

Route::get('dangky','xuLyAuthController@getRegister')->name('register');
Route::post('dangky','xuLyAuthController@postRegister')->name('postregister');
Route::post('uploadPhoto','UploadPhotoController@storageImage')->name('uploadPhoto');


Route::prefix('admin')->group(function () {
    Route::resource('comment', 'CommentController');
    Route::resource('content', 'ContentController');
    Route::resource('content-category', 'ContentCategoryController');
    Route::resource('sub-content-category', 'SubContentCategoryController');
    Route::resource('user', 'UserController');
});
Route::get('about','mainController@getGioiThieu')->name('gioithieu');