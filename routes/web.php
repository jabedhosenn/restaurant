<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [UserController::class, 'home'])->name('dashboard');
});


Route::get('/addfood', [AdminController::class, 'addFood'])->middleware('auth', 'admin')->name('admin.addfood');
Route::post('/addfood', [AdminController::class, 'storeFood'])->middleware('auth', 'admin')->name('admin.storefood');

Route::get('/viewfood', [AdminController::class, 'viewFood'])->middleware('auth', 'admin')->name('admin.viewfood');
Route::get('/deletefood/{id}', [AdminController::class, 'deleteFood'])->middleware('auth', 'admin')->name('admin.deletefood');
Route::get('/editfood/{id}', [AdminController::class, 'editFood'])->middleware('auth', 'admin')->name('admin.editfood');
Route::post('/updatefood/{id}', [AdminController::class, 'updateFood'])->middleware('auth', 'admin')->name('admin.updatefood');
