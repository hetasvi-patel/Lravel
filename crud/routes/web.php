<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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


Route::get('/home', function () {
    return view('home');
});

Route::get('user', [HomeController::class , 'user']);

Route::get('/index' , [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create' , [ProductController::class, 'create'])->name('product.create');
Route::post('/store' , [ProductController::class, 'store'])->name('product.store');
Route::delete('/destroy/{id}' , [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');





// Route::get('/home/{name}', function ($name) {
//     return view('home', ['name'=>$name]);
// });