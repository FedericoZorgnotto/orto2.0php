<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/learn', function () {
    return view('learn');
})->name('learn');

Route::get('/trade', function () {
    return view('trade');
})->name('trade');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/ads', [AdController::class, 'index'])->name('ads.index');
Route::get('/ads/create', [AdController::class, 'create'])->middleware(['auth', 'verified'])->name('ads.create');
Route::post('/ads', [AdController::class, 'store'])->middleware(['auth', 'verified'])->name('ads.store');
Route::get('/ads/{ad}', [AdController::class, 'show'])->name('ads.show');
Route::get('/ads/{ad}/edit', [AdController::class, 'edit'])->middleware(['auth', 'verified', 'CheckAdOwnership'])->name('ads.edit');
Route::patch('/ads/{ad}', [AdController::class, 'update'])->middleware(['auth', 'verified', 'CheckAdOwnership'])->name('ads.update');
Route::delete('/ads/{ad}', [AdController::class, 'destroy'])->middleware(['auth', 'verified', 'CheckAdOwnership'])->name('ads.destroy');
Route::post('/ads/{ad}/images', 'AdImageController@store')->middleware(['auth', 'verified', 'CheckAdOwnership'])->name('ads.images.store');


Route::get('/tokens', [TokenController::class, 'index'])->middleware(['auth', 'verified'])->name('tokens.index');
Route::post('/tokens', [TokenController::class, 'store'])->middleware(['auth', 'verified'])->name('tokens.store');
Route::delete('/tokens/{tokenId}', [TokenController::class, 'destroy'])->middleware(['auth', 'verified'])->name('tokens.destroy');


require __DIR__.'/auth.php';
require __DIR__.'/api.php';
