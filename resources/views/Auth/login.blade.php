@extends ('base')

@section('login')



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Task Manager</title>
</head>
<body>
    <div class="container">
        {!! Form::open(['url' => 'homeadmin']) !!}

            @if(Session::has('error_message'))
                {!! Session::get('error_message') !!}
            @endif

            <h2>Proporcione los Datos</h2>

            {!! Form::label('usuario', 'Nombre de Usuario') !!}
            {!! Form::text('usuario') !!}

            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password') !!}

          
            
            {!! Form::submit('Entrar', ['class' => 'btn btn-primary btn-block']) !!}
    
        {!! Form::close() !!}
    </div>
</body>
</html>
@stop