<?php

use App\Http\Controllers\CostumerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\VoucerController;
use App\Models\invoice;
use App\Models\voucer;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/voucer/use-voucer',[VoucerController::class, 'useVoucer']);
Route::post('/voucer',[VoucerController::class, 'addVoucer'])->name('voucer.add');
Route::get('/voucer/addinvoice',[VoucerController::class, 'addInvoice']);
Route::post('/invoice',[InvoiceController::class, 'tambahInvoice'])->name('invoice.add');
Route::post('/costumer',[CostumerController::class, 'tambahCostumer'])->name('costumer.add');
