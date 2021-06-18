<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    /**
     * Definimos el nombre de la tabla
     */
    protected $table = "empleados";

    /**
     * Definimos los datos que
     * se guardarán en nuestra tabla.
     * * Es útil hacer ésto para crear el registro en nuestra tabla
     * * utilizando el método create (Eloquent)
     */
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'estatus',
    ];
}
