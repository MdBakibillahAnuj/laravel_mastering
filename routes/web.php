<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FullNameController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/full-name', [HomeController::class, 'fullName'])->name('full-name');


Route::get('/calculator', [HomeController::class, 'calculator'])->name('calculator');
Route::post('/get-full-name', [FullNameController::class, 'getFullName'])->name('get-full-name');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
