@extends('layout')

@section('title')
    Inicio
@endsection
{{--  --}}

@section('content')
    <div class="container">
        <h1 class="text-center mb-2">Bienvenido</h1>
        <div class="row g-2 align-items-center">
            <div class="col-12 text-center">
                <a class="btn btn-primary w-25" href="{{ route('generar') }}"><i class="fa-solid fa-square-plus"></i> Generar</a>
            </div>
            <div class="col-12 text-center">
                <a class="btn btn-primary w-25" href="{{ route('visualizar') }}"><i class="fa-solid fa-border-all"></i> Visualizar</a>
            </div>
            <div class="col-12 text-center ">
                <a class="btn btn-primary w-25" href="{{ route('validar') }}"><i class="fa-solid fa-square-check"></i> Validar</a>
            </div>
        </div>
        <p>{{ ($alert === null)? "": $alert; }}</p>
    </div>
@endsection
