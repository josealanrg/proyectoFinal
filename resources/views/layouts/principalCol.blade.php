<html lang="es">
<div id="page-wrap">
<head>
    <meta charset="UTF-8">
    <title>TASK MANAGER</title>
    {!!Html::style('css/estilos.css')!!}
</head>
<body>
  <figure>
<img src="banner.png">
</figure>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{URL::to('home')}}">Inicio</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="proyectos">Proyectos<span class="badge">3</span></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li><a href="{{URL::to('usuario')}}">Tareas<span class="badge"></span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{URL::to('logout')}}">Cerrar Sesion</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="div-op">
</div>
<HR width=100% align="center">
  @yield('content')
</body>
</div>
    <footer>
      <div id="footer">
        <small>
            DR &copy; Ingenieria Web 2015.
        </small>
      </div>  
    </footer>

</html>