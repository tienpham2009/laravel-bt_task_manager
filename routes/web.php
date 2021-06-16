<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
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

// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {

    Route::get('index',  [CustomerController::class , 'index'])->name("customer.index");

    Route::get('create', function () {
        return view('modules.customer.create');
    })->name("customer.create");

    Route::post('store' , [CustomerController::class , 'store'])->name('customer.store');

    Route::get('{id}/{name}/{phone}/{email}/show', [CustomerController::class , 'show'])->name('customer.show');

    Route::get('{id}/edit', [CustomerController::class , 'edit'])->name('customer.edit');

    Route::patch('{id}/update', [CustomerController::class , 'update'])->name('customer.update');

    Route::delete('{id}', [CustomerController::class , 'destroy'])->name('customer.destroy');
});

