@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="display-5">Crear empleado</h2>
    <form method="POST" action="{{ route('empleado.crear') }}">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label for="">Nombre *</label>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>    
            </div>
            <div class="col-md-4">
                <label for="">Apellido paterno *</label>
                <input type="text" class="form-control" name="apellido_paterno" placeholder="Apellido paterno" required>    
            </div>
            <div class="col-md-4">
                <label for="">Apellido materno</label>
                <input type="text" class="form-control" name="apellido_materno" placeholder="Apellido materno">    
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <label for="">Correo *</label>
                <input type="email" class="form-control" name="correo" placeholder="ejemplo@ejemplo.com" required>    
            </div>
            <div class="col-md-4">
                <label for="">Tipo de contrato *</label>
                <input type="text" class="form-control" name="tipo_contrato" placeholder="Tipo de contrato" required>    
            </div>
           
        </div>
        <button class="btn btn-success btn-lg float-right">Agregar</button>
    </form>
</div>
@endsection
