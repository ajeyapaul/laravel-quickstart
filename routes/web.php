<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['can:profile access'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['can:profile edit'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['can:profile delete'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
