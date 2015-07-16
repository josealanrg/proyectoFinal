<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proyecto;
use View;
use App\Usuario;
use App\Estatus;
use App\Tarea;
use Input;
use DB;



use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('homeadmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getProyectos()
    {
         $proyectos = Proyecto::all();
        return View::make('proyectodescripcion')->with('proyectos',$proyectos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getTareas()
    {
        $tareas = Tarea::getTareass();  
        $proyectos = Proyecto::all();
        $usuarios = Usuario::all();
        $estatus=Estatus::all('id_estatus');

        return view::make('tareasadmin',compact('tareas','proyectos','usuarios','estatus'));
        
    }

    public function getColaboradores()
    {
        $colaboradores = DB::table('usuarios')->where('id_tipoUsuario','=','3')->get();
        $ntareas = DB::table('tareas')->where('id_usuario','=','usuarios')->count();

        return View::make('colaboradoresadmin',compact('colaboradores','ntareas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function muestraForm()
    {
        $usuarios=DB::table('usuarios')->where('id_tipoUsuario','=','2')->get();

        return View::make('registrarproyecto')->with('usuarios',$usuarios);
       
    }

    public function muestraFormTarea()
    {
        $proyectos=Proyecto::all();
        $usuarios=DB::table('usuarios')->where('id_tipoUsuario','=','3')->get();
        $estatus=Estatus::all();

        return View::make('registrartarea')->with('proyectos',$proyectos)->with('usuarios',$usuarios)->with('estatus',$estatus);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function nuevoProyecto(Request $proyectos)
    {
      $nuevoProyecto=new Proyecto();  
      $nuevoProyecto->nombre=$proyectos->input('nombre');
      $nuevoProyecto->fechaCreacion=$proyectos->input('fechaCreacion');
      $nuevoProyecto->fechaEntrega=$proyectos->input('fechaEntrega');
      $nuevoProyecto->descripcion=$proyectos->input('descripcion');
      $nuevoProyecto->id_usuario=$proyectos->input('id_usuario');
      $nuevoProyecto->save();

      return Redirect::to('homeadmin');
 
    }

    public function nuevaTarea(Request $tareas)
    {
      $nuevaTarea=new Tarea();  
      $nuevaTarea->descripcion=$tareas->input('descripcion');
      $nuevaTarea->fechaEntrega=$tareas->input('fechaEntrega');
      $nuevaTarea->id_proyecto=$tareas->input('id_proyecto');
      $nuevaTarea->id_usuario=$tareas->input('id_usuario');
      $nuevaTarea->id_estatus=$tareas->input('id_estatus');

      $nuevaTarea->save();

      return Redirect::to('tareasadmin');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function editarTarea($id_tarea)
    {
        
     $usuarios=Usuario::all();
     $proyectos=Proyecto::all();
     $estatus=Estatus::all();


    $tareas = DB::table('tareas')->where('id_tarea',$id_tarea)->get();



   return View('editartarea',compact('tareas','proyectos','usuarios','estatus'));


        

    }

    public function updateTarea($id_tarea)
    {
      
    }
}
