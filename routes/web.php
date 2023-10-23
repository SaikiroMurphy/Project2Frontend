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
   Route::get('/orders', [\App\Http\Controllers\CustomerController::class, 'order'])->name('customers.orders');
   Route::get('/contact', [\App\Http\Controllers\CustomerController::class, 'contact'])->name('customers.contact');
   Route::get('/login', [\App\Http\Controllers\CustomerController::class, 'login'])->name('customers.login');
   Route::post('/loginProcess', [\App\Http\Controllers\CustomerController::class, 'loginProcess'])->name('customers.loginProcess');
   Route::get('/register', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customers.register');
   Route::post('/register', [\App\Http\Controllers\CustomerController::class, 'store'])->name('customers.store');
   Route::delete('/customers/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('customers.destroy');
});

Route::prefix('/admin')->group(function (){
    Route::get('/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.login');
    Route::post('/loginProcess', [\App\Http\Controllers\AdminController::class, 'loginProcess'])->name('admin.loginProcess');
   Route::get('/fields',[\App\Http\Controllers\FieldController::class, 'index'])->name('fields.index');
   Route::get('/fields/create', [\App\Http\Controllers\FieldController::class, 'create'])->name('fields.create');
   Route::post('/fields/store', [\App\Http\Controllers\FieldController::class, 'store'])->name('fields.store');
   Route::get('/customers', [\App\Http\Controllers\AdminController::class, 'customers'])->name('admin.customers');
   Route::delete('/fields/{id}', [\App\Http\Controllers\FieldController::class, 'destroy'])->name('fields.destroy');
   Route::get('/fields/{field}/edit', [\App\Http\Controllers\FieldController::class, 'edit'])->name('fields.edit');
   Route::put('/fields/{field}/edit', [\App\Http\Controllers\FieldController::class, 'update'])->name('fields.update');
   Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('admin.orders');
   Route::get('/field_types', [\App\Http\Controllers\FieldTypeController::class, 'index'])->name('field_types.index');
   Route::get('/times', [\App\Http\Controllers\TimeController::class, 'index'])->name('times.index');

});

Route::middleware('checkLogin')->prefix('/customers')->group(function () {
   Route::get('/', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customers.index');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
});
