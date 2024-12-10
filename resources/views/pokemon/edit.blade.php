@extends('pokemon.base')

@section('content')

<form action="{{route('pokemon.update' . $pokemon->id)}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input value="{{old('nombre', $pokemon->nombre)}}" required type="text" class="form-control" id="nombre"
            name="nombre" placeholder="pokemon nombre">
    </div>
    <div class="form-group">
        <label for="ataque">Ataque</label>
        <input value="{{old('ataque', $pokemon->ataque)}}" required type="number" step="0.001" class="form-control"
            id="ataque" name="ataque" placeholder="pokemon ataque">
    </div>
    <div class="form-group">
        <label for="defensa">Defensa</label>
        <input value="{{old('defensa', $pokemon->defensa)}}" required type="number" step="0.001" class="form-control"
            id="defensa" name="defensa" placeholder="pokemon defensa">
    </div>
    <div class="form-group">
        <label for="sexo">Sexo</label>
        <input value="{{old('ataque', $pokemon->sexo)}}" required type="text" class="form-control" id="sexo"
            name="sexo" placeholder="pokemon sexo">
    </div>
    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input value="{{old('ataque', $pokemon->tipo)}}" required type="text" class="form-control"
            id="tipo" name="tipo" placeholder="pokemon tipo">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input value="{{old('ataque', $pokemon->descripcion)}}" required type="number" step="0.001" class="form-control"
            id="descripcion" name="descripcion" placeholder="pokemon descripcion">
    </div>
    <button type="submit" class="btn btn-primary">edit</button>
</form>

@endsection