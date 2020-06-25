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

Auth::routes();
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login')->name('login.submit');
Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('regist');
Route::post('/register','Auth\RegisterController@register')->name('regist.submit');
Route::get('/', 'PageController@index')->name('index');
Route::get('/doctors', 'PageController@doctors')->name('doctors');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::prefix('user')->group(function () {
    Route::get('profile', 'ProfileController@index');
    Route::post('profile', 'ProfileController@update');

    Route::get('history', 'HistoryController@index');
    Route::get('history/{id}', 'HistoryController@detail')->name('detail');
    Route::get('/history/confirm/{id}', 'HistoryController@confirm')->name('confirm');
    Route::get('/appointment', 'AppointmentController@appointment')->name('appointment');
    Route::post('/appointment-confirm', 'AppointmentController@reserve')->name('appointment-confirm');
    Route::get('/appointment-confirm-detail','AppointmentController@confirm')->name('app-detail');
});

Route::prefix('admin')->group(function () {
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

        //Route Data Untuk Admin
        Route::get('/data_admin', 'AdminController@data_admin')->name('admin.data_admin');
        Route::post('/data_admin', 'AdminController@tambah_data_admin')->name('admin.tambah_data_admin');
        Route::get('/data_admin/{id}/delete','AdminController@delete_admin')->name('admin.delete_admin');

        // Route Data User
        Route::get('/data_user', 'AdminController@data_user')->name('admin.data_user');
        Route::get('/data_user/{id}/delete','AdminController@delete_user')->name('admin.delete_user');
        Route::get('/user_profile/{id}','AdminController@user_profile')->name('admin.user_profile');

        // Route Data Doctor
        Route::get('/data_doctor', 'AdminController@data_doctor')->name('admin.data_doctor');
        Route::get('/data_doctor/{id}/delete','AdminController@delete_doctor')->name('admin.delete_doctor');
        Route::post('/data_doctor', 'AdminController@tambah_data_doctor')->name('admin.tambah_data_doctor');
        Route::get('/doctor_profile/{id}','AdminController@doctor_profile')->name('admin.doctor_profile');
        Route::post('/doctor_profile/{id}','AdminController@doctor_update')->name('admin.doctor_update');

        //Route Data Reservasi
        Route::get('/data_reservasi','AdminController@data_reserve')->name('admin.data_reserve');
        Route::post('/data_reservasi/update/{id}','AdminController@status_update')->name('admin.status_update');
        Route::get('/data_reservasi/delete/{id}','AdminController@delete_reserve')->name('admin.delete_reserve');
        Route::get('/data_reservasi/{id}','AdminController@reserve')->name('admin.reserve_detail');
        Route::get('/reservasi_baru','AdminController@new_reserve')->name('admin.new_reserve');

        // Data Slider
        Route::get('/data_slider', 'AdminController@slider')->name('admin.data_slider');
        Route::post('/data_slider', 'AdminController@tambah_data_slider')->name('admin.tambah_data_slider');
        Route::get('/data_slider/delete/{id}','AdminController@delete_slider')->name('admin.delete_slider');

});

