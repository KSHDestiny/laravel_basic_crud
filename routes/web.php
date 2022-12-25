<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

// read
Route::get('/',[CustomerController::class,'read'])->name('read');

// create page
Route::get('/createPage',[CustomerController::class,'createPage'])->name('create#page');
// create
Route::post('/create',[CustomerController::class,'create'])->name('create');

// update page
Route::get('/updatePage/{id}',[CustomerController::class,'updatePage'])->name('update#page');
// update
Route::post('/update/{id}',[CustomerController::class,'update'])->name('update');

// delete
Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('delete');
