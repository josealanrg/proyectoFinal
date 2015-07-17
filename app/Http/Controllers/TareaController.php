<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TareaCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proyecto;
use App\Tarea;
use App\Type;
use App\Status;

use DB;
use App\Http\Requests\ProyectoCreateRequest;




class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tareas=Tarea::join('proyectos','tasks.id_proyecto','=','proyectos.id')
                    ->join('users','tasks.id_usuario','=','users.id')
                    ->join('status','tasks.id_status','=','status.id')

                    ->select('tasks.id','tasks.description','tasks.dateE','proyectos.name','status.status','users.email')
                    ->get();

           
        return view('tarea.index',compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tarea=Tarea::all();
        $proyectos=Proyecto::all();
        $users = DB::table('users')->where('id_type','=','3')->get();
        $status=Status::all();
        return view('tarea.create',compact('proyectos','users','status','tarea'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(TareaCreateRequest $request)
    {
         \App\Tarea::create([
            'description'=>$request['description'],
            'dateE'=>$request['dateE'],
            'id_proyecto'=>$request['id_proyecto'],
            'id_usuario'=>$request['id_usuario'],
            'id_status'=>$request['id_status'],

        
        ]);
        return redirect('/tarea')->with('message','Tarea Creada con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tarea=\App\Tarea::find($id);
        $proyectos=Proyecto::all();
        $users = DB::table('users')->where('id_type','=','3')->get();
        $status=Status::all();
        return view('tarea.edit',compact('tarea','proyectos','users','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id,TareaCreateRequest $request)
    {
        $tarea=\App\Tarea::find($id);
         $tarea->fill($request->all());
         $tarea->save();
         Session::flash('message','Tarea editada correctamente');
         return Redirect::to('/tarea');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
          \App\Tarea::destroy($id);
        session::flash('message','Tarea Eiminada Correctamente');
        return Redirect::to('/tarea');
    }
}
