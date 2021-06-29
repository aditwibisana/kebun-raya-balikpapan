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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/loginadmin', 'AuthController@adminlogin');
Route::post('/postloginadmin', 'AuthController@postloginadmin');

Route::get('/pengguna', 'PenggunaController@index');
Route::post('/pengguna/create', 'PenggunaController@create');
Route::get('/pengunjung', 'PengunjungController@index');
Route::post('/pengunjung/create', 'PengunjungController@create');
Route::get('/spot', 'SpotController@index');
Route::get('/flora', 'FloraController@index');
Route::get('/flora/{id}/read', 'FloraController@read');

Route::group(['middleware' => ['auth', 'checkRole:pengunjung']], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/profile/{id}/edit', 'ProfileController@edit');
    Route::post('/profile/{id}/update', 'ProfileController@update');

    Route::get('/tempat', 'TempatController@index');
    Route::get('/tempat/{id}/pesan', 'TempatController@pesan');
    Route::post('/tempat/{id}/booking', 'TempatController@booking');

    Route::get('/pemesanan', 'PemesananController@index');
    Route::get('/pemesanan/{id}/bayar', 'PemesananController@tampil');
    Route::get('/pemesanan/{id}/cetak', 'PemesananController@cetak');
    Route::post('/pemesanan/{id}/bukti', 'PemesananController@bukti');
    Route::get('/pemesanan/{id}/delete', 'PemesananController@delete');
});

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/adm', 'AdminController@index');
    Route::get('/datapengunjung', 'PengunjungController@tampil');
    Route::get('datapengunjung/cari', 'PengunjungController@cari');
    Route::get('/tambahdatapengunjung', 'PengunjungController@tambah');
    Route::get('/pengunjung/{id}/edit', 'PengunjungController@edit');
    Route::post('/pengunjung/{id}/update', 'PengunjungController@update');
    Route::get('/pengunjung/{id}/delete', 'PengunjungController@delete');
    Route::post('/pengunjung/tambah', 'PengunjungController@tambahdata');

    Route::get('/datapengguna', 'PenggunaController@tampil');
    Route::get('datapengguna/cari', 'PenggunaController@cari');
    Route::get('/pengguna/{id_pengguna}/edit', 'PenggunaController@edit');
    Route::post('/pengguna/{id}/update', 'PenggunaController@update');
    Route::get('/tambahdatapengguna', 'PenggunaController@tambah');
    Route::post('/pengguna/tambah', 'PenggunaController@tambahdata');
    Route::get('/pengguna/{id}/delete', 'PenggunaController@delete');

    Route::get('/datatempat', 'TempatController@tampil');
    Route::get('/tambahdatatempat', 'TempatController@tambah');
    Route::post('/tempat/create', 'TempatController@create');
    Route::get('/tempat/{id}/edit', 'TempatController@edit');
    Route::post('/tempat/{id}/update', 'TempatController@update');
    Route::get('/tempat/{id}/delete', 'TempatController@delete');
    Route::get('datatempat/cari', 'TempatController@cari');

    Route::get('/daftarspot', 'SpotController@tampil');
    Route::get('dataspot/cari', 'SpotController@cari');
    Route::get('/tambahdataspot', 'SpotController@tambah');
    Route::post('/spot/tambah', 'SpotController@tambahdata');
    Route::get('/spot/{id}/edit', 'SpotController@edit');
    Route::post('/spot/{id}/update', 'SpotController@update');
    Route::get('/spot/{id}/delete', 'SpotController@delete');

    Route::get('/daftarflora', 'FloraController@tampil');
    Route::get('/tambahdataflora', 'FloraController@tambah');
    Route::post('/flora/tambah', 'FloraController@tambahdata');
    Route::get('/flora/{id}/edit', 'FloraController@edit');
    Route::post('/flora/{id}/update', 'FloraController@update');
    Route::get('/flora/{id}/delete', 'FloraController@delete');

    Route::get('/daftarpemesanan', 'PemesananController@tampilPemesanan');
    Route::get('/pemesanan/{id}/delete', 'PemesananController@delete');
    Route::get('/pemesanan/{id}/konfirmasi', 'PemesananController@konfirmasi');
    Route::get('/pemesanan/{id}/btlkonfirmasi', 'PemesananController@btlkonfirmasi');
    Route::get('datapemesanan/cari', 'PemesananController@cari');
});
