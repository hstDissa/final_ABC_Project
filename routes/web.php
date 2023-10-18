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
    return view('welcome');
});

// Route::get('/category/create', function () {
//     return view('category.create');
// });
//category Routes
Route::get('/category/create',[App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
Route::post('/category/save',[App\Http\Controllers\CategoryController::class,'save'])->name('category.save');

//Products
Route::get('/product/create',[App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/product/save',[App\Http\Controllers\ProductController::class, 'save'])->name('product.save');
// Route::put('/product/update/{id}', 'ProductController@update')->name('product.update');
Route::put('/product/update/{id}',[App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

Route::get('/product/index',[App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/edit/{product}',[App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/delete/{productID}',[App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');

