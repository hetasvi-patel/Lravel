<?php

use App\Http\Controllers\MyController;
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


Route::get('/', [MyController::class,'Home'])->name('Index');
Route::get('/AboutUs', [MyController::class,'AboutUs'])->name('Others.AboutUs');
Route::get('/ContactUs', [MyController::class,'ContactUs'])->name('Others.ContactUs');
Route::get('/Create',  [MyController::class, 'mypost']) -> name('Others.Create');
Route::post('/mypost',  [MyController::class, 'store']) -> name('Others.store');