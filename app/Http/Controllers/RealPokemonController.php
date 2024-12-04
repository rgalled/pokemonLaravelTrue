<?php

namespace App\Http\Controllers;

use App\Models\RealPokemon;
use Illuminate\Http\Request;

class RealPokemonController extends Controller
{

    public function index()
    {
        return view('pokemon.index');
    }

    public function create()
    {
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RealPokemon $realPokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RealPokemon $realPokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RealPokemon $realPokemon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RealPokemon $realPokemon)
    {
        //
    }
}
