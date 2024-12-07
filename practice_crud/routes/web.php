<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route to show the login page
Route::get('/', function () {
    return view('auth.login');
});

// Corrected login and register routes using controller methods
Route::get('login', [AuthController::class, 'create'])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');

Route::post('logout', [AuthController::class, 'destroy'])->name('logout');

// Protecting the product routes with the 'auth' middleware
Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
});
