<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
Route::get('/', function () {

Route::get('/dashboard', function () {
>>>>>>> dbf0508f0e1a9f7115cadc724d22ab7fffa294a2
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::get('/', [FilmController::class, 'dashboard'])->name('film.dashboard');

Route::get('/films', [FilmController::class, 'index'])->name('film.index');

Route::get('/films/create', [FilmController::class, 'create'])->name('film.create');

Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('film.edit');


Route::post('/novo', [FilmController::class, 'store'])->name('film.store');

Route::get('/categories',[CategoryController::class, 'index'])->name('category.index');

Route::get('/categories/create',[CategoryController::class, 'create'])->name('category.create');

Route::post('/categories',[CategoryController::class, 'store'])->name('category.store');

Route::get('/categories/{category}/edit',[CategoryController::class, 'edit'])->name('category.edit');

Route::put('/categories/{category}',[CategoryController::class, 'update'])->name('category.update');

Route::delete('/categories/{category}',[CategoryController::class, 'destroy'])->name('category.destroy');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
