<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/ramadhan', [PageController::class, 'ramadhan'])->name('ramadhan');
Route::get('/ramadhan/{id}', [PageController::class, 'detailRamadhan'])->name('detail.ramadhan');
Route::get('/lebaran', [PageController::class, 'lebaran'])->name('lebaran');
Route::get('/lebaran/{id}', [PageController::class, 'detailLebaran'])->name('detail.lebaran');
Route::get('/jadwal', [PageController::class, 'jadwal'])->name('jadwal');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
