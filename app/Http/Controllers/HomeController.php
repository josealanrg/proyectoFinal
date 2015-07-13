<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proyecto;
use View;

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
    public function getColaboradores()
    {
        return view::make('colaboradoresadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function getTareas()
    {
        return view::make('tareasadmin');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
