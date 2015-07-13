@extends('base')

@section('homeadmin')

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="homeadmin">Inicio <span class="glyphicon glyphicon-home"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="colaboradoresadmin">Colaboradores <span class="sr-only">(current)</span></a></li>
        <li><a href="tareasadmin">Tareas</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="salir">Cerrar Sesion <span class="glyphicon glyphicon-user"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

 <div class="panel panel-primary" id="panelgrupos">
        <div class="panel-heading">
        <center><h3 class="panel-title">Panel de Trabajo</h3><center>
        </div>

        <br>
    <div class="panel-body" >

    @yield('proyectodescripcion')

     @yield('muestracolaboradores')

     @yield('muestratareas')

    
  </div>
  </div>

@stop