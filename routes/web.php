<?php

use Illuminate\Support\Facades\Auth;
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

//superadmin
    Route::get('superadmin/index', 'SuperAdminController@index')->middleware('auth:superadmin');

    //CRUD Mitra
    Route::get('superadmin/mitra/index', 'MitraController@index');
    Route::get('superadmin/mitra/create', 'MitraController@showCreate');
    Route::post('createPost', 'MitraController@create');
    Route::get('superadmin/mitra/edit/{id_superadmin}', 'MitraController@showEdit');
    Route::post('editPost/{id_superadmin}', 'MitraController@edit');
    Route::get('deleteSuperAdmin/{id_superadmin}', 'MitraController@delete');

//Mitra
    Route::get('mitra/index', 'MitraController@index')->middleware('auth:mitra');

    //CRUD Layanan
    Route::get('mitra/layanan/index', 'LayananController@index');
    Route::get('mitra/layanan/create', 'LayananController@showCreate');
    Route::post('createPost', 'LayananController@create');
    Route::get('mitra/layanan/edit/{id_layanan}', 'LayananController@showEdit');
    Route::post('editPost/{id_layanan}', 'LayananController@edit');
    Route::get('deleteLayanan/{id_layanan}', 'LayananController@delete');

    //CRUD Pesanan
    Route::get('mitra/pesanan/index', 'PesananController@index');

//login
    Route::get('login', 'LoginController@index')->middleware('guest');
    Route::post('loginPost', 'LoginController@loginPost');
    Route::get('logout', 'LoginController@logout');


