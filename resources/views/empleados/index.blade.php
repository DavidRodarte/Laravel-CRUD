@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    
    {{-- En caso de querer ver también empleados inactivos --}}
    @if ($todos)
        <h2 class="display-5">Todos los empleados</h2>
        <a href="{{ url('/') }}">Mostrar solo activos</a>
    @else 
        <h2 class="display-5">Empleados activos</h2>
        <a href="{{ url('/1') }}">Mostrar todos los empleados</a>
    @endif
    <a href="{{ route('formulario.crear') }}" class="btn btn-success float-right m-3">Añadir nuevo</a>
   
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>

                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo</th>
                {{-- En caso de que se listen todos los empleados, se muestra su estatus --}}
                {!! $todos ? '<th>Estatus</th>' : '' !!}
                <th>-</th>
            </thead>
            <tbody>
                @forelse ($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->id }}</td>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellido_paterno }} {{ $empleado->apellido_materno }}</td>
                        <td>{{ $empleado->correo }}</td>
                        @if ($todos)
                            <td>{{ $empleado->estatus ? 'Activo' : 'Inactivo' }}</td>
                        @endif
                        <td><a href="{{ route('empleado.show', $empleado->id) }}" class="btn btn-info">Ver</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Sin empleados registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
