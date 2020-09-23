<?php

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
    return view('auth.login');
})->name('awal');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('/ajicorp')->group(function(){
        Route::get('/admin', function () {return view('ajicorp.admin');})->name('index.admin');
        Route::resource('divisi','ajicorp\DivisiController');
        Route::resource('status','ajicorp\StatusController');
        Route::resource('jabatan','ajicorp\JabatanController');
        Route::resource('karyawan','ajicorp\KaryawanController');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
