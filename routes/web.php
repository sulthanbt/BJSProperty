<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemesananController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/pemesanan/view_pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/form_pemesanan', [PemesananController::class, 'insertPemesanan']);
Route::post('/pemesanan/tambah_pemesanan', [PemesananController::class, 'tambahPemesanan']);
Route::get('/pemesanan/edit_pemesanan/{id_pemesanan}', [PemesananController::class, 'editPemesanan']);
Route::post('/pemesanan/update_pemesanan', [PemesananController::class, 'updatePemesanan']);
Route::get('/pemesanan/hapus/{id_pemesanan}', [PemesananController::class, 'hapus']);