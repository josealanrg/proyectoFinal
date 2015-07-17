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
</nav>
<div id="div-op">
</div>
<HR width=100% align="center">
@include('alerts.errors')
{!!Form::open(['route'=>'log.store','method'=>'POST'])!!}
   <div>
    {!!Form::label('Email:')!!}
    {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Email'])!!}
  </div>
   <div>
    {!!Form::label('Password:')!!}
    {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa la Contraseña'])!!}
  </div>
  {!!Form::submit('Ingresar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
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
