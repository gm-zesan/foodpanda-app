<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoLoginController;
use App\Http\Controllers\AutoLogoutController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/auto-login', [AutoLoginController::class, 'handle'])->name('auto-login');
Route::get('/logout-sync', [AutoLogoutController::class, 'handle'])->name('logout.sync');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
