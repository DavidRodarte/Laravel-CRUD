<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Middleware para verificar 
     * que el usuario se encuentre logueado
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Método para listar empleados
     * de manera opcional se puede consultar a los
     * usuarios inactivos
     * @param $inactivos = 0 {Integer}
     * @return View
     */

     public function index($inactivos = 0){
         $empleados = Empleado::where('activo')->get();

         return view('empleados.index', compact('empleados'));
     }


     /**
      * Crear un nuevo empleado
      * @param Request
      * @return Redirect
      */

      public function store(Request $request){
          /**
           * Validación de campos requeridos
           */
          $request->validate([
            'nombre'=>'required',
            'apellido_paterno'=>'required',
            'correo'=>'required',
          ]);

          /**
           * Guardar un nuevo empleado en tabla empleados
           */
          Empleado::create($request->all());

          /**
           * Guardar en session un mensaje indicando que el empleado se registró correctamente
           */
          Session::flash('message','Se ha registrado al empleado correctamente');
          /**
           * Redireccionar a la ruta de inicio
           * donde se muestran los empleados.
           */
          return redirect::to('/');
      }

      /**
       * Actualizar datos del empleado
       * @param Request
       * @return Redirect
       */

      public function update(Request $request, $id)
      {
        $request->validate([
            'nombre'=>'required',
            'apellido_paterno'=>'required',
            'correo'=>'required',
        ]);
        //Buscar si existe el empleado y guardar los datos
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
       
        //Mostrar mensaje
        Session::flash('message','Se ha actualizado al empleado correctamente');
        //Redireccionar al listado de artículos
        return redirect::to('/');
      }

      /**
       * Actualizar el estatus del empleado
       * @param Request
       * @return Redirect
       */

      public function cambiarEstatus($id)
      {
        
        //Buscar si existe el empleado y estatus = !estatus
        $empleado = Empleado::findOrFail($id);
        $empleado->estatus = !$empleado->estatus;
        $empleado->save();

        //Mostrar mensaje
        Session::flash('message','Se ha actualizado al empleado correctamente');
        //Redireccionar al listado de artículos
        return redirect::to('/');
      }

      /**
       * Eliminar al empleado de la tabla
       * @param $id {Int}
       * @return Redirect
       */

      public function destroy($id)
      {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        Session::flash('message','Se ha eliminado al empleado correctamente');
        return redirect::to('articulos');
      }
}
