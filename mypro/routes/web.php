<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\MyblogController as MyController;


route::get('/',[MyController::class,'index'])->name('mypost.index');
// route::get('/mypost/create',[MyController::class,'cerate'])->name('mypost.create');
// route::post('/create',[MyController::class,'store'])->name('mypost.store');

// route::delete('/mypost/{id}',[MyController::class,'destroy'])->name('mypost.destroy');

// //edit

// route::get('/mypost/{id}/edit',[MyController::class,'edit'])->name('mypost.edit');
// route::put('/mypost/{id}',[MyController::class,'update'])->name('mypost.update');

route::resource('myblog',MyController::class);

route::get('/contactus',[MyController::class,'contactUs'])->name('contactus');
route::get('/aboutus',[MyController::class,'aboutUs'])->name('aboutus');
