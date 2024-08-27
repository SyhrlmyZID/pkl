<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\data_desaController;
use App\Http\Controllers\data_aparatController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/profil', function () {
    return view('data_umum.profile');
});

Route::get('/generate-pdf/{id}', [PDFController::class, 'make']);

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/home', data_desaController::class);
Route::resource('/data_aparat', data_aparatController::class);
Route::get('/data_aparat/{id}/edit', [data_aparatController::class, 'edit'])->name('data_aparat.edit');



});

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');

