@extends('base')

@section('basecontent')

    <div class="form-group">
        pokemon id #:
        {{$pokemon->id}}
    </div>
    <div class="form-group">
        pokemon nombre:
        {{$pokemon->nombre}}
    </div>
    <div class="form-group">
        pokemon ataque:
        {{$pokemon->ataque}}
    </div>
    <div class="form-group">
        pokemon defensa:
        {{$pokemon->defensa}}
    </div>
    <div class="form-group">
        pokemon sexo:
        {{$pokemon->sexo}}
    </div>
    <div class="form-group">
        pokemon descripción:
        {{$pokemon->tipo}}
    </div>
    <div class="form-group">
        pokemon descripción:
        {{$pokemon->descripción}}
    </div>
    <div class="form-group">
        <a href="{{url()->previous()}}">back</a>
    </div>

@endsection