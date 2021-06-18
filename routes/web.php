<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/{todos?}', [App\Http\Controllers\EmpleadoController::class, 'index'])->name('inicio');

Route::get('/formulario/crear', [App\Http\Controllers\EmpleadoController::class, 'formCrear'])->name('formulario.crear');
Route::get('/formulario/editar/{id}', [App\Http\Controllers\EmpleadoController::class, 'formEditar'])->name('formulario.editar');

Route::post('empleado/crear', [App\Http\Controllers\EmpleadoController::class, 'store'])->name('empleado.crear');
Route::get('empleado/{id}', [App\Http\Controllers\EmpleadoController::class, 'show'])->name('empleado.show');
Route::post('empleado/actualizar/{id}', [App\Http\Controllers\EmpleadoController::class, 'update'])->name('empleado.update');
Route::get('invertir/estatus/{id}', [App\Http\Controllers\EmpleadoController::class, 'cambiarEstatus'])->name('empleado.cambiarEstatus');
Route::get('eliminar/{id}', [App\Http\Controllers\EmpleadoController::class, 'destroy'])->name('empleado.destroy');