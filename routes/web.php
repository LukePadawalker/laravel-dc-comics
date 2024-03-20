<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ComicController::class, 'index'])->name('home');

// Rotta lista
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// Rotta di creazione comic
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// Rotta singolo comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// Rotta per il form di modifica
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

// Rotta per salvare un comic in database
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Rotte per salvataggio in database delle modifiche
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// Rotta per eliminare un comic
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');

