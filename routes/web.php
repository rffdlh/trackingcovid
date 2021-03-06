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
    return view('frontend.welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('test',function(){
    return view('halo');
});

Route::get('provinsi',function(){
    return view('provinsi.index');
});

Route::get('kota',function(){
    return view('kota.index');
});

Route::get('admin',function(){
    return view('utama');
});

// Route::get('/', function() {
//     return view("auth.login");
// });
// Auth::routes();

//Kasus Indonesia
use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi', ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan', KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('rw', RwController::class);

use App\Http\Controllers\Kasus1Controller;
Route::resource('kasus1', Kasus1Controller::class);

//Front End
use App\Http\Controllers\FrontEndController;
Route::resource('/', FrontEndController::class);