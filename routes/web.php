<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.dashboard'); 
// });

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', 'AuthController@login')->name('login');
    Route::post('/login', 'AuthController@loginPost')->name('login');
});



Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@dashboard');
    Route::get('/', 'HomeController@dashboard');

    Route::get('/daftar_siswa_baru', 'MuridController@tambah_daftar_siswa')->name('daftar_siswa_baru');
    Route::get('/daftar_siswa', 'MuridController@index')->name('daftar_siswa');
    Route::post('/daftar_siswa_baru','MuridController@store')->name('daftar_siswa_baru');

    Route::get('/buat_pembayaran_baru', 'HomeController@buat_pembayaran_baru');
    Route::get('/daftar_pembayaran_pembiayaan', 'HomeController@daftar_pembayaran_pembiayaan');
    Route::get('/detail_pembayaran_pembiayaan', 'HomeController@detail_pembayaran_pembiayaan');
    Route::get('/konfirmasi_pembayaran', 'HomeController@konfirmasi_pembayaran');

    Route::get('/tambah_absensi', 'HomeController@tambah_absensi');
    Route::get('/tambah_absensi_guru', 'HomeController@tambah_absensi_guru');
    Route::get('/daftar_absensi', 'HomeController@daftar_absensi');
    Route::get('/detail_absensi', 'HomeController@detail_absensi');

    Route::delete('/logout', 'AuthController@logout')->name('logout');
});