<?php
use App\Http\Controllers\RealPokemonController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RealPokemonController::class, 'index'])->name('pokemon.index');
Route::get('/create', [RealPokemonController::class, 'create'])->name('pokemon.create');
