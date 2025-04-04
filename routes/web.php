<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

Route::get('/', [ResourceController::class, 'index'])->name('promotions.index');
Route::get('/promotions/create', [ResourceController::class, 'create'])->name('promotions.create');
Route::post('/promotions', [ResourceController::class, 'store'])->name('promotions.store');
Route::get('/promotions/{id}', [ResourceController::class, 'show'])->name('promotions.show');
Route::get('/promotions/{id}/edit', [ResourceController::class, 'edit'])->name('promotions.edit');
Route::post('/promotions/{id}', [ResourceController::class, 'update'])->name('promotions.update');
