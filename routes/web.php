<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductCareController;

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

Route::get('/', [CustomerController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/customer/refill', [CustomerController::class, 'showRefillForm'])->name('customer.refill.form');
//     Route::post('/customer/refill', [CustomerController::class, 'submitRefill'])->name('customer.refill.submit');
// });

Route::get('/product-cares', [ProductCareController::class, 'indexView'])->name('product-cares.view');

Route::get('/customer/locations', [CustomerController::class, 'showLocations'])->name('customer.locations');
Route::get('/customer/request-refill', [CustomerController::class, 'showRequestForm'])->name('customer.request_refill');
Route::post('/customer/request-refill', [CustomerController::class, 'submitRequestRefill'])->name('customer.request_refill.submit');
Route::get('/transaction-list', [CustomerController::class, 'showTransactionList'])->name('customer.transaction-list');
Route::get('/transaction-status/{id}', [CustomerController::class, 'transactionStatus'])->name('customer.transaction-status');
