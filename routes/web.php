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

Route::get('/',"AuthController@login");

Route::get('/login', "AuthController@login");

Route::post('/login-proses', "AuthController@bacadatabase");

Route::get('/logout', "AuthController@logout");


/*--------------------------------- USER -----------------------------------------------*/

Route::get('/dashboard', "HomeController@dashboard");

Route::get('/data-diri', "HomeController@data_diri");

Route::get('/edit-data-diri', "HomeController@edit_data_diri");

Route::get('/permohonan-absensi', "HomeController@permohonan_absensi");

Route::get('/riwayat-absensi', "HomeController@riwayat_absensi");

/*--------------------------------------------------------------------------------------*/







/*------------------------------- ADMIN -------------------------------------------------*/

Route::get('/admin/dashboard', "HomeControllerAdmin@dashboard");

Route::get('/admin/lihat-permohonan-absensi', "HomeControllerAdmin@lihat_permohonan_absensi");










/*---------------------------------------------------------------------------------------*/





