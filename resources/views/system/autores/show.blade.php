@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Autor</h1>
@stop

@section('content')
    <div class="row mb-2">
        <div class="col-2">
            <a href="{{route('autores.index')}}">
                <x-adminlte-button label="Volver a todos" theme="primary" icon="fas fa-key"/>
            </a>
        </div>
        <div class="col-2">
            <a href="{{route('autores.edit', $autor->id)}}">
                <x-adminlte-button label="Editar" theme="primary" icon="fas fa-key"/>
            </a>
        </div>
        <div class="col-8">
            <x-adminlte-profile-widget name="{{$autor->nombres}} {{$autor->apellidos}}" desc="Cedula {{$autor->cedula}}" theme="primary"
                                       img="https://picsum.photos/id/1011/100">
                <x-adminlte-profile-col-item class="text-primary border-right" icon="fas fa-lg fa-gift"
                                             title="Sales" text="25" size=6 badge="primary"/>
                <x-adminlte-profile-col-item class="text-danger" icon="fas fa-lg fa-users" title="Dependents"
                                             text="10" size=6 badge="danger"/>
            </x-adminlte-profile-widget>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
