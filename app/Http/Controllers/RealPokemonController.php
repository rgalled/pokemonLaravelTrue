<?php

namespace App\Http\Controllers;

use App\Models\RealPokemon;
use Illuminate\Http\Request;

class RealPokemonController extends Controller
{

    public function index()
    {
        return view('pokemon.index', [
            'pokemons' => RealPokemon::orderBy('nombre')->get(),
        ]);
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
        $validated = $request->validate([
            'nombre' => 'required|unique:product|max:100|min:2',
            'ataque' => 'required|numeric|gte:0|lte:999',
            'defensa' => 'required|numeric|gte:0|lte:999',
            'sexo' => 'required|unique:product|max:10|min:2',
            'tipo' => 'required|unique:product|max:10|min:2',
            'descripción' => 'required|numeric|gte:0|lte:999',
        ]);
        $object = new RealPokemon($request->all());
        try {
            //$result = $object->save();
            $object = RealPokemon::create($request->all());
            return redirect('pokemon')->with(['message' => 'The pokemon has been created.']);
        } catch(\Exception $e) {
            //si no lo he guardado volver a la página anterior con sus datos para volver a rellenar el formulario y mensaje
            return back()->withInput()->withErrors(['message' => 'The pokemon has not been created.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RealPokemon $realPokemon)
    {
        return view(
            'pokemon.show',
            ['pokemon' => $realPokemon,]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RealPokemon $realPokemon)
    {
        return view(
            'pokemo.edit',
            ['pokemon' => $realPokemon,]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RealPokemon $realPokemon)
    {
        $validated = $request->validate([
            'nombre' => 'required|unique:product|max:100|min:2',
            'ataque' => 'required|numeric|gte:0|lte:999',
            'defensa' => 'required|numeric|gte:0|lte:999',
            'sexo' => 'required|unique:product|max:10|min:2',
            'tipo' => 'required|unique:product|max:10|min:2',
            'descripción' => 'required|numeric|gte:0|lte:999',
        ]);
        try {
            $result = $realPokemon->update($request->all());
            return redirect('product')->with(['message' => 'The pokemon has been updated.']);
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['message' => 'The pokemon has not been updated.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RealPokemon $realPokemon)
    {
        try {
            $realPokemon->delete();
            return redirect('pokemon')->with(['message' => 'The pokemon has been deleted.']);
        } catch(\Exception $e) {
             return back()->withErrors(['message' => 'The pokemon has not been deleted.']);
        }
    }
}
