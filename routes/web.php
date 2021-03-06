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

Route::get('/', 'WelcomeController@home');

//superadmin
    Route::group(['middleware' => 'auth:superadmin'], function () {
        Route::get('superadmin/index', 'SuperAdminController@index');

            //CRUD Mitra
        Route::get('superadmin/mitra/index', 'SuperAdminController@show');
        Route::get('superadmin/mitra/create', 'SuperAdminController@showCreate');
        Route::post('createPostMitra', 'SuperAdminController@create');
        Route::get('superadmin/mitra/edit/{id_mitra}', 'SuperAdminController@showEdit');
        Route::post('editPostMitra/{id_mitra}', 'SuperAdminController@edit');
        Route::get('deleteMitra/{id_mitra}', 'SuperAdminController@delete');

            //show Data
        Route::get('superadmin/layanan/index', 'SuperAdminController@showLayanan');
        Route::get('superadmin/pesanan/index', 'SuperAdminController@showPesanan');
    });

//Mitra
    Route::group(['middleware' => 'auth:mitra'], function () {
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
        Route::get('mitra/pesanan/edit/{id_pesanan}', 'PesananController@showEdit');
        Route::post('editPostPesanan/{id_pesanan}', 'PesananController@edit');
        Route::get('mitra/pesanan/create', 'PesananController@showCreate');
        Route::post('createPostPesanan', 'PesananController@create');
    });


//login
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@index');
    });

    Route::post('loginPost', 'LoginController@loginPost');
    Route::get('logout', 'LoginController@logout');


