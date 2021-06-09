<?php

use App\Http\Controllers\ProductController;
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
Route::prefix('admin')->group(function () {
    Route::get('/',[ProductController::class,'index'])->name('list.product');
    Route::get('/add',[ProductController::class,'add'])->name('add.product');
    Route::post('/add',[ProductController::class,'store'])->name('store.product');
    Route::get('/edit/{id}',[ProductController::class,'edit'])->name('edit.product');
    Route::post('/edit/{id}',[ProductController::class,'update'])->name('update.product');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete.product');


});
