<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController; 
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\PembayaranController; 
use App\Http\Controllers\HutangController;

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



Route::get('/', [DashboardController::class, 'index']);
Route::get('/pages/viewCustomer',[CustomerController::class, 'index']);
Route::get('/pages/viewCustomer/editCust/{id_pembeli}', [CustomerController::class, 'editCust']);

Route::get('/pembayaran/viewKPR',[PembayaranController::class, 'index']);
Route::get('/pembayaran/viewCashBertahap',[PembayaranController::class, 'cashbertahap']);

Route::get('/viewHutang',[HutangController::class, 'index']);
