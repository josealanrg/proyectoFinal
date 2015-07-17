<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use view;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @retResponse
     */
    public function __construct(){
        $this->middleware('auth',['only'=>'home']);
    }
    public function index()
    {
        return view('index');
        //
    }
    public function home(){
        return view('home');
    }
    public function proyectos()
    {
        return view('proyectos');
    }
}
