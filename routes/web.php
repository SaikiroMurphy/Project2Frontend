<?php

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
    return view('index');
});

Route::prefix('/customers')->group(function () {
   Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
   Route::get('/orders', [\App\Http\Controllers\CustomerController::class, 'order'])->name('customers.orders');
   Route::get('/contact', [\App\Http\Controllers\CustomerController::class, 'contact'])->name('customers.contact');
});

Route::prefix('/admin')->group(function (){
   Route::get('/',[\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
   Route::get('/fields',[\App\Http\Controllers\FieldController::class, 'index'])->name('fields.index');
   Route::get('/fields/create', [\App\Http\Controllers\FieldController::class, 'create'])->name('fields.create');
   Route::post('/fields/store', [\App\Http\Controllers\FieldController::class, 'store'])->name('fields.store');
   Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'customers'])->name('admin.customers.customers');
    Route::delete('/fields/{id}', [\App\Http\Controllers\FieldController::class, 'destroy'])->name('fields.destroy');
});
