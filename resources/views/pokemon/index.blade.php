@extends('pokemon.base')

@section('content')

    <table class="table" id="tablaPokemon">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ataque</th>
                <th>Defensa</th>
                <th>Sexo</th>
                <th>Tipo</th>
                <th>Descripción</th>
                <th>delete</th>
                <th>edit</th>
                <th>view</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pokemons as $pokemon)
                <tr>
                    <td>{{$pokemon->id}}</td>
                    <td>{{$pokemon->nombre}}</td>
                    <td>{{$pokemon->ataque}}</td>
                    <td>{{$pokemon->defensa}}</td>
                    <td>{{$pokemon->sexo}}</td>
                    <td>{{$pokemon->tipo}}</td>
                    <td>{{$pokemon->descripción}}</td>
                    <td><a href="#" data-href="{{route('pokemon.destroy' . $pokemon->id)}}" class = "borrar">Borrar</a></td>
                    <td><a href="{{route('pokemon.edit') . $pokemon->id . '/edit')}}">Editar</a></td>
                    <td><a href="{{route('pokemon.show' . $pokemon->id)}}">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
            <a href="{{route('pokemon.create')}}" class="btn btn-success">Añadir pokemon</a>
            <form id="formDelete" action="{{ ('') }}" method="post">
                @csrf
                @method('delete')
            </form>
    </div>

@endsection
