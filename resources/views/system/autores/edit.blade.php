@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Autor</h1>
@stop

@section('content')

    <form action="{{route('autores.update', $autor)}}" method="post">
        @csrf
        @method('put')
        <div class="row mb-2">
            <div class="col-2">
                <a href="{{route('autores.index')}}">
                    <x-adminlte-button label="Volver a todos" theme="primary" icon="fas fa-balance-scale"/>
                </a>
            </div>
            <div class="col-2">
                <a href="{{route('autores.show', $autor->id)}}">
                    <x-adminlte-button label="Guardar" theme="primary" icon="fas fa-save" type="submit"/>
                </a>
            </div>
            <div class="col-8">

                {{-- With prepend slot --}}
                <x-adminlte-input name="nombres" label="Nombres" placeholder="Nombres" label-class="text-lightblue"
                                  value="{{$autor->nombres}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="apellidos" label="Apellidos" placeholder="Apellidos"
                                  label-class="text-lightblue" value="{{$autor->apellidos}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="cedula" label="Cedula" placeholder="Cedula" label-class="text-lightblue"
                                  value="{{$autor->cedula}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                <x-adminlte-input name="ruc" label="RUC" placeholder="RUC" label-class="text-lightblue"
                                  value="{{$autor->ruc}}">
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

                {{-- With a link on the bottom slot and old support enabled --}}
                <x-adminlte-input name="email" label="Email" placeholder="postal code" value="{{$autor->email}}"
                                  enable-old-support>
                    <x-slot name="prependSlot">
                        <div class="input-group-text text-olive">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>

            </div>


            <!-- Main node for this component -->
            <div class="timeline timeline-inverse">
                <!-- Timeline time label -->
                <div class="time-label">
                    <span class="bg-green">23 Aug. 2019</span>
                </div>
                <div>
                    <!-- Before each timeline item corresponds to one icon on the left scale -->
                    <i class="fas fa-envelope bg-blue"></i>
                    <!-- Timeline item -->
                    <div class="timeline-item">
                        <!-- Time -->
                        <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                        <!-- Header. Optional -->
                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                        <!-- Body -->
                        <div class="timeline-body">
                            El usuario hizo prestamo del libro de 5 libros
                        </div>
                        <!-- Placement of additional controls. Optional -->
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-sm">Read more</a>
                            <a class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- The last icon means the story is complete -->
                <div>
                    <i class="fas fa-clock bg-gray"></i>
                </div>
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
