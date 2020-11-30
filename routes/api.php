<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
//PERCOBAAN
Route::get('users', 'UserController@users');
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('users/profile', 'UserController@profile')->middleware('auth:api');
Route::get('users/{id}', 'UserController@profileById')->middleware('auth:api');
Route::post('post', 'PostController@add')->middleware('auth:api');
Route::put('post/{post}', 'PostController@update')->middleware('auth:api');
Route::delete('post/{post}', 'PostController@delete')->middleware('auth:api');
*/


//Layanan
Route::get('layanan/index', 'API\LayananController@index');                     // Menampilkan semua data layanan
Route::post('layanan/create', 'API\LayananController@add');                     // Proses Tambah data Layanan
Route::get('layanan/{id_layanan}', 'API\LayananController@indexById');          // Menampikan data layanan sesuai ID
Route::put('layanan/{id_layanan}', 'API\LayananController@update');             // Proses Edit data Layanan sesuai ID
Route::delete('layanan/{id_layanan}', 'API\LayananController@delete');          // Hapus data layanan sesuai ID

//Pesanan
Route::get('pesanan/index', 'API\PesananController@index');                     // Menampilkan semua data Pesanan
Route::post('pesanan/create', 'API\PesananController@add');                     // Proses Tambah Data Pesanan
Route::get('pesanan/{id_pesanan}', 'API\PesananController@indexById');          // Menampilkan Data Pesanan Sesuai ID
Route::put('pesanan/{id_pesanan}', 'API\PesananController@update');             // Peoses Edit data Pesanan sesuai ID
Route::put('pesanan/{id_pesanan}/batal', 'API\PesananController@batal');             // Peoses Edit data Pesanan sesuai ID
Route::delete('pesanan/{id_pesanan}', 'API\PesananController@delete');          // Hapus Data Pesanan seusia ID

//Mitra
Route::get('mitra', 'API\MitraController@mitra');                               // Menampilkan semua data Mitra
Route::post('registerMitra', 'API\MitraController@registerMitra');              // Proses register Mitra

//Pelanggan
Route::get('pelanggan', 'API\PelangganController@Pelanggan');                   // Menampilkan semua data Pelanggan
Route::get('pelanggan/{id_pelanggan}', 'API\PelangganController@PelangganById');// Menampilkan sesuai Id data Pelanggan
Route::post('registerPelanggan', 'API\PelangganController@registerPelanggan');  // Proses register Pelanggan

//Login
Route::post('login', 'API\LoginController@login');                              // Proses Login Pelanggan dan Mitra




