<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proyecto;
use DB;
use App\Http\Requests\ProyectoCreateRequest;




class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $proyectos=Proyecto::all();
        return view('proyecto.index',compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(ProyectoCreateRequest $request)
    {
         \App\Proyecto::create([
            'name'=>$request['name'],
            'description'=>$request['description'],
            'dateE'=>$request['dateE'],
        
        ]);
        return redirect('/proyecto')->with('message','Proyecto Creado con Exito');
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
         $proyecto=\App\Proyecto::find($id);
        return view('proyecto.edit',['proyecto'=>$proyecto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update($id,ProyectoCreateRequest $request)
    {
        $proyecto=\App\Proyecto::find($id);
         $proyecto->fill($request->all());
         $proyecto->save();
         Session::flash('message','Proyecto editado correctamente');
         return Redirect::to('/proyecto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
          \App\Proyecto::destroy($id);
        session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/proyecto');
    }
}
