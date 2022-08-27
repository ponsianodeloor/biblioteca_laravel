@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Autor</h1>
@stop

@section('content')

    <form action="{{route('autores.store')}}" method="post">
        @csrf
        <div class="row mb-2">
            <div class="col-2">
                <a href="{{route('autores.index')}}">
                    <x-adminlte-button label="Volver a todos" theme="primary" icon="fas fa-balance-scale"/>
                </a>
            </div>
            <div class="col-2">
                    <x-adminlte-button label="Guardar" theme="primary" icon="fas fa-save" type="submit"/>
            </div>

            <div class="col-8">

                {{-- With prepend slot --}}
                <x-adminlte-input name="nombres" label="Nombres" placeholder="Nombres" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="apellidos" label="Apellidos" placeholder="Apellidos"
                                  label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="cedula" label="Cedula" placeholder="Cedula" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="ruc" label="RUC" placeholder="RUC" label-class="text-lightblue">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                {{-- With a link on the bottom slot and old support enabled --}}
                <x-adminlte-input name="email" label="Email" placeholder="postal code" enable-old-support>
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-olive">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

            </div>

        </div>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
