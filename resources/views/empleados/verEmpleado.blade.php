@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="display-5">Empleado {{ $empleado->id }} <em><strong>{!! $empleado->estatus ? '<span style="color:rgb(47, 88, 47)">Activo</span>' :  '<span style="color:rgb(121, 55, 47)">Inactivo</span>' !!}</strong></em></h2>
    <div class="m-2">
        <a href="{{ route('formulario.editar', $empleado->id) }}" class="btn btn-info">Editar</a>
        <a href="{{ route('empleado.cambiarEstatus', $empleado->id) }}" class="btn btn-warning">Invertir estatus</a>
        <button class="btn btn-danger" onclick="borrar()">Borrar permanentemente</button>
    </div>
    <p class="lead">Nombre: {{ $empleado->nombre }}</p>
    <p class="lead">Apellido paterno: {{ $empleado->apellido_paterno }}</p>
    <p class="lead">Apellido materno: {{ $empleado->apellido_materno }}</p>
    <p class="lead">Tipo de contrato: {{ $empleado->tipo_contrato }}</p>
</div>

<script>
    /* Validación básica */
    function borrar(){
        var confirmar = confirm('¿Deseas borrar a este empleado? Esta acción no se puede revertir');

        if(confirmar){
            window.location.href = "{{ route('empleado.destroy', $empleado->id) }}"
        }
    }
</script>
@endsection

