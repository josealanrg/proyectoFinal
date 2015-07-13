@extends ('base')

@section('login')

<div class="panel panel-primary" id="panelEntrada">
    <div class="panel-heading">
      <h3 class="panel-title">Proporcione sus datos</h3>
    </div>
    <div class="panel-body" >
      <input type="text" id="usuario" class="form-control" placeholder="Usuario" autofocus>
      <input type="password" id="password" class="form-control" placeholder="Contraseña">
      <button id="btnEntrar" class="btn btn-warning btn-lg btn-block">
        Entrar
        <span class="glyphicon glyphicon-user"></span>
      </button>
    </div>
  </div>

  @stop