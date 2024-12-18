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


Route::get('/', [MyController::class,'Home'] );
Route::get('/AboutUs', [MyController::class,'AboutUs'] );
Route::get('/ContactUs', [MyController::class,'ContactUs'] );
