@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Autores</h1>
@stop

@section('content')
    <p>Autores de los libros.</p>
    <a href="{{route('autores.create')}}"> Crear Autor</a>
    <ul>
        @foreach($autores as $autor)
            <li>
                <a href="{{route('autores.show', $autor->id)}}">Ver </a>
                -
                {{$autor->id}} -
                {{$autor->nombres}} {{$autor->apellidos}} {{$autor->cedula}} -
                {{$autor->created_at}}
            </li>
        @endforeach
        {{$autores->links()}}
    </ul>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
