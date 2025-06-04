<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [FilmController::class, 'index'])->name('film.index');

Route::get('/novo', [FilmController::class, 'create'])->name('film.create');

Route::get('/editar', [FilmController::class, 'edit'])->name('film.edit');

Route::get('/lista', [FilmController::class, 'show'])->name('film.show');

Route::post('/novo', [FilmController::class, 'store'])->name('film.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
