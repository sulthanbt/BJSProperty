<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController; 
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\PembayaranController; 

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/', [DashboardController::class, 'index']);
Route::get('/customer',[CustomerController::class, 'index']);
Route::get('/pembayaran/viewKPR',[PembayaranController::class, 'index']);
Route::get('/pembayaran/viewCashBertahap',[PembayaranController::class, 'cashbertahap']);

