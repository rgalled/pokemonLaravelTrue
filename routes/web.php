<?php
use App\Http\Controllers\RealPokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RealPokemonController::class, 'index'])->name('pokemon.index');
Route::get('/create', [RealPokemonController::class, 'create'])->name('pokemon.create');
Route::get('/edit', [RealPokemonController::class, 'edit'])->name('pokemon.edit');
Route::get('/show', [RealPokemonController::class, 'show'])->name('pokemon.show');
