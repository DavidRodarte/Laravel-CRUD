@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="display-5">Editar empleado #{{ $empleado->id }}</h2>
    <form method="POST" action="{{ route('empleado.update', $empleado->id) }}">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="">Nombre *</label>
                <input type="text" class="form-control" name="nombre" value="{{ $empleado->nombre }}" required>    
            </div>
            <div class="col-md-4">
                <label for="">Apellido paterno *</label>
                <input type="text" class="form-control" name="apellido_paterno" value="{{ $empleado->apellido_paterno }}" placeholder="Apellido paterno" required>    
            </div>
            <div class="col-md-4">
                <label for="">Apellido materno</label>
                <input type="text" class="form-control" name="apellido_materno" value="{{ $empleado->apellido_materno }}" placeholder="Apellido materno">    
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="">Correo *</label>
                <input type="email" class="form-control" name="correo"  value="{{ $empleado->correo }}" required>    
            </div>
            <div class="col-md-4">
                <label for="">Tipo de contrato *</label>
                <input type="text" class="form-control" name="tipo_contrato"  value="{{ $empleado->tipo_contrato }}" required>    
            </div>
           
        </div>
        <button class="btn btn-success btn-lg float-right">Agregar</button>
    </form>
</div>
@endsection
